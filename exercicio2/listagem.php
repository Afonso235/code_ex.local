<?php
$baseDir = 'uploads/';

function listFiles($dir) {
    $files = array_diff(scandir($dir), array('.', '..'));

    echo '<ul class="accordion">';

    //acordeon
    foreach ($files as $file) {
        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            echo '<li class="accordion-list"><a href="#" class="folder">' . $file . '</a>';
            listFiles($filePath);
            echo '</li>';
        } else {
            $fileInfo = pathinfo($filePath);
            $fileSize = filesize($filePath);
            $fileSizeFormatted = formatSize($fileSize);
            //donwload
            echo '<li><a href="download.php?file=' . $filePath . '">' . $fileInfo['filename'] . '.' . $fileInfo['extension'] . '</a>';
            echo ' (' . $fileSizeFormatted . ')';
            echo ' - ' . date('Y-m-d H:i:s', filemtime($filePath)) . '</li>';
            // excluir
            echo '<form method="post" action="delete.php">';
            echo '<input type="hidden" name="file" value="' . $filePath . '">';
            echo '<input type="submit" class="delete-button" value="Excluir">';
            echo '</form>';
        }
    }
    echo '</ul>';
}

function formatSize($size) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    for ($i = 0; $size >= 1024 && $i < 4; $i++) {
        $size /= 1024;
    }
    return round($size, 2) . ' ' . $units[$i];
}

if (isset($_GET['dir'])) {
    $currentDir = $baseDir . $_GET['dir'];
} else {
    $currentDir = $baseDir;
}
?>
