<!DOCTYPE html>
<html>
<head>
    <title>Códigos Aleatórios</title>
</head>
<body>
    <div>
        <div style="float: left; width: 50%;">
            <h1>Códigos Aleatórios</h1>

            <?php
            session_start();
            include "db.php";
            include "function.php";

            exibirCodigo($connection);
        
        ?> 
        </div> 
        <div style="float: right; width: 50%;">
            <?php
        echo "<h2>Códigos Gerados</h2>";
        listarCodigos($connection);
        ?>
        </div>
    </div>
</body>
</html>
