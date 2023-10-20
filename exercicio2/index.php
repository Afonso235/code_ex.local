<?php include "listagem.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
    <div>
        <button class="button" id="toggleButton">Toggle Mode</button>
        <script>                  
            const buttonElement = document.getElementById('toggleButton');
            let isDarkMode = false;

            buttonElement.addEventListener('click', () => {
            isDarkMode = !isDarkMode;
            if (isDarkMode) {
                buttonElement.classList.add('dark');
                buttonElement.classList.remove('light');
            } else {
                buttonElement.classList.add('light');
                buttonElement.classList.remove('dark');
            }
            });
        </script>
    </div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>