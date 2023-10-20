<?php 

function exibirCodigo($connection) {
    $tempoAtual = time();
    $intervalo = 300; // 5 minutos em segundos

    if (!isset($_SESSION['ultima_geracao']) || ($tempoAtual - $_SESSION['ultima_geracao']) >= $intervalo) {
        $codigo = gerarCodigoAleatorio();

        if (inserirCodigoNaBD($connection, $codigo)) {
            $_SESSION['ultima_geracao'] = $tempoAtual;
        } else {
            echo "Erro ao inserir o código no banco de dados.<br>";
        }
    }
}

function gerarCodigoAleatorio() {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#*%!"$&?«»ºª+~^-_@£§|<>:;¨';
    $codigo = '';
    
    $codigo .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    
    $codigo .= random_int(0, 9);
    $codigo .= random_int(0, 9);
    
    $codigo .= chr(random_int(65, 90)); 
    $codigo .= chr(random_int(65, 90)); 
    $codigo .= chr(random_int(97, 122)); 
    
    $codigo .= str_pad(random_int(0, 9), 2, '0', STR_PAD_LEFT);

    $codigo = str_shuffle($codigo);

    return $codigo;
}


function inserirCodigoNaBD($connection, $codigo) {
    $timestamp = date('Y-m-d H:i:s');
    $sql = "INSERT INTO code_ex (codigo, timestamp) VALUES ('$codigo', '$timestamp')";
    
    if ($connection->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function listarCodigos($connection) {
    $sql = "SELECT codigo, timestamp FROM code_ex ORDER BY timestamp DESC";
    $result = $connection->query($sql);

    $imageDirectory = 'img/';

    $imageFiles = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $randomImage = $imageFiles[array_rand($imageFiles)];

            echo '<div class="card" onclick="flipCard(this)">';
            echo '<img class="front" src="' . $randomImage . '" alt="Imagem do código">';
            echo '<div class="back">';
            echo 'Código: ' . $row['codigo'] . '<br>';
            echo 'Data/Hora: ' . $row['timestamp'] . '<br>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'Nenhum código encontrado.';
    }
}

$codigo = gerarCodigoAleatorio();
if (inserirCodigoNaBD($connection, $codigo)) {
    echo "Código gerado e inserido com sucesso: $codigo";
} else {
    echo "Erro ao inserir o código no banco de dados.";
}


?>