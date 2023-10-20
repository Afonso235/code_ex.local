<?php
if (isset($_POST["submit"])) {
    $diretorio_destino = "uploads/"; 

    if (!file_exists($diretorio_destino)) {
        mkdir($diretorio_destino, 0777, true);
    }

    $arquivo = $_FILES["arquivo"];
    $extensoes_permitidas = array("jpg", "jpeg", "png", "pdf"); 

    $extensao = pathinfo($arquivo["name"], PATHINFO_EXTENSION);

    if (in_array($extensao, $extensoes_permitidas)) {
        $nome_arquivo = $arquivo["name"];
        $caminho_temporario = $arquivo["tmp_name"];

        $diretorio_extensao = ($extensao === "pdf") ? "pdf" : $extensao;

        $caminho_destino = $diretorio_destino . $diretorio_extensao . '/' . $nome_arquivo;

        if (!file_exists($diretorio_destino . $diretorio_extensao)) {
            mkdir($diretorio_destino . $diretorio_extensao, 0777, true);
        }

        if (move_uploaded_file($caminho_temporario, $caminho_destino)) {
            echo "Arquivo enviado com sucesso.";
            ?>
            <div class="go-back">
                <a href="index.php">Ver Lista de Ficheiros</a>
            </div>
            <?php        
            } else {
            echo "Ocorreu um erro ao enviar o arquivo.";
            ?>
            <div class="go-back">
                <a href="formulario.php">Voltar para o Formulário</a>
            </div>
            <?php
        }
    } else {
        echo "Erro: Extensão de arquivo não permitida.";
        ?>
        <div class="go-back">
            <a href="formulario.php">Voltar para o Formulário</a>
        </div>
        <?php
    }
}
?>
