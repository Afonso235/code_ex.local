<?php

include "db.php";

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    
    $sql = "DELETE FROM code_ex WHERE codigo = '$codigo'";
    
    if ($connection->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo 'Erro ao excluir o card.';
    }
} else {
    echo 'Código inválido.';
}
?>
