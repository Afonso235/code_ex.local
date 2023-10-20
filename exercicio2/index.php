<?php
include "listagem.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <h2>Lista de Ficheiros</h2>

    <div class="file-list">
    <?php
    listFiles($currentDir);
    ?>
    </div>
    <div class="go-back">
        <a href="formulario.php">Voltar para o Formulário</a>
    </div>
</body>
</html>