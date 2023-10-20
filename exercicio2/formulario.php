<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Upload de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione um ficheiro:
        <input type="file" name="arquivo" id="arquivo">
        <input type="submit" value="Enviar Ficheiro" name="submit">
    </form>
</body>
</html>