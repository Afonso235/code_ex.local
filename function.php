<?php 

function exibirCodigo($connection) {
    $tempoAtual = time();
    $intervalo = 300; // 5 minutos em segundos

    $exibirMensagem = false;

    // Verifica se é hora de gerar um novo código
    if (!isset($_SESSION['ultima_geracao']) || ($tempoAtual - $_SESSION['ultima_geracao']) >= $intervalo) {
        // Gera um código aleatório
        $codigo = gerarCodigoAleatorio();

        // Insere o código na base de dados
        if (inserirCodigoNaBD($connection, $codigo)) {
            $exibirMensagem = true;
            $_SESSION['ultima_geracao'] = $tempoAtual;
        } else {
            echo "Erro ao inserir o código no banco de dados.<br>";
        }
    }

    if ($exibirMensagem) {
        echo "Código gerado e inserido com sucesso: $codigo<br>";
    }
}

function gerarCodigoAleatorio() {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#*%!"$&?«»ºª+~^-_';
    $codigo = '';
    
    // Gerar 2 números
    $codigo .= str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);
    
    $codigo .= chr(rand(65, 90)); // Maiúscula
    $codigo .= chr(rand(65, 90)); // Maiúscula
    $codigo .= chr(rand(97, 122)); // Minúscula
    
    // Gerar 2 números
    $codigo .= str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);
    
    // Gerar 1 caracter especial (garantindo pelo menos um)
    $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];

    // Verificar se já existe um caractere especial no código
    $temCaractereEspecial = strpos($codigo, $caracteres) !== false;

    // Se não tem caractere especial, substitua um dos caracteres gerados aleatoriamente
    if (!$temCaractereEspecial) {
        $posicaoSubstituir = rand(0, strlen($codigo) - 1);
        $codigo[$posicaoSubstituir] = $caracteres[rand(0, strlen($caracteres) - 1)];
    }

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