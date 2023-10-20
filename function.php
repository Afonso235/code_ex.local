<?php 

function exibirCodigo($connection) {
    $tempoAtual = time();
    $intervalo = 300; // 5 minutos em segundos

    // Verifica se é hora de gerar um novo código
    if (!isset($_SESSION['ultima_geracao']) || ($tempoAtual - $_SESSION['ultima_geracao']) >= $intervalo) {
        // Gera um código aleatório
        $codigo = gerarCodigoAleatorio();

        // Insere o código na base de dados
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
    
    // Gerar 1 caracter especial (garantindo pelo menos um)
    $codigo .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    
    // Gerar 2 números
    $codigo .= random_int(0, 9);
    $codigo .= random_int(0, 9);
    
    $codigo .= chr(random_int(65, 90)); // Maiúscula
    $codigo .= chr(random_int(65, 90)); // Maiúscula
    $codigo .= chr(random_int(97, 122)); // Minúscula
    
    // Gerar 2 números
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

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Código: " . $row["codigo"] . " - Data/Hora: " . $row["timestamp"] . "<br>";
        }
    } else {
        echo "Nenhum código encontrado.";
    }
}

$codigo = gerarCodigoAleatorio();
if (inserirCodigoNaBD($connection, $codigo)) {
    echo "Código gerado e inserido com sucesso: $codigo";
} else {
    echo "Erro ao inserir o código no banco de dados.";
}


?>