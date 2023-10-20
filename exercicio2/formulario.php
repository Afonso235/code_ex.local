<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para Upload de Ficheiros</title>
    <link rel="stylesheet" type="text/css" href="styles.css" id="style-link">
    <link rel="stylesheet" type="text/css" href="light.css" id="light-mode-link" disabled>
    <script src="script.js"></script>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipartform-data" class="form">
        <h1>Formulário para Upload de Ficheiros</h1>
        Selecione um ficheiro:
        <input type="file" name="arquivo" id="arquivo">
        <input type="submit" value="Enviar Ficheiro" name="submit" class="submit-file">
    </form>
    <div>
        <button class="btn-mode" onclick="toggleMode()">Light Mode</button>
    </div>
</body>
</html>