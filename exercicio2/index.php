<?php include "listagem.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="styles.css" id="style-link">
    <link rel="stylesheet" type="text/css" href="light.css" id="light-mode-link" disabled></head>
<body>
    <h2>Lista de Ficheiros</h2>
    <div class="file-list">
        <?php listFiles($currentDir); ?>
    </div>
    <div class="go-back">
        <a href="formulario.php">Voltar para o Formulário</a>
    </div>
    <button class="btn-mode" onclick="toggleMode()">Alternar Modo</button>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>