<!DOCTYPE html>
<html lang="en">
<head>
    <title>Códigos Aleatórios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div>
        <div class="code-random"">
            <h1>Códigos Aleatórios</h1>

            <?php
            session_start();
            include "db.php";
            include "function.php";

            exibirCodigo($connection);
        ?> 
        </div> 
        <div class="list-cod">
        <h2 class="gera-code">Códigos Gerados</h2>
            <?php
        listarCodigos($connection);
        ?>
        </div>
    </div>
</body>
</html>
