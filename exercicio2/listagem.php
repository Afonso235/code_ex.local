<?php
$baseDir = 'uploads/';

function listFiles($dir) {
    $files = array_diff(scandir($dir), array('.', '..'));
    echo '<div class="file-list">';
    // Accordion
    foreach ($files as $file) {
      $filePath = $dir . '/' . $file;
      if (is_dir($filePath)) {
        echo '<div class="accordion-item">';
        echo '<button class="accordion-button" data-target="#accordion-content-' . $file . '">' . $file . '</button>';
        echo '<div id="accordion-content-' . $file . '" class="accordion-content">';
        listFiles($filePath);
        echo '</div>';
        echo '</div>';
      } else {
        $fileInfo = pathinfo($filePath);
        $fileSize = filesize($filePath);
        $fileSizeFormatted = formatSize($fileSize);
        // Download
        echo '<div class="file-item">';
        echo '<a class="file-link" href="download.php?file=' . $filePath . '">' . $fileInfo['filename'] . '.' . $fileInfo['extension'];
        echo ' (' . $fileSizeFormatted . ')';
        echo ' - ' . date('Y-m-d H:i:s', filemtime($filePath)) . '</a>';
        // Delete
        echo '<form method="post" action="delete.php">';
        echo '<input type="hidden" name="file" value="' . $filePath . '">';
        echo '<button class="delete-button">Excluir</button>';
        echo '</form>';
        echo '</div>';
      }
    }
    echo '</div>';
  }

function formatSize($size) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    for ($i = 0; $size >= 1024 && $i < 4; $i++) {
        $size /= 1024;
    }
    return round($size, 2) . ' ' . $units[$i];
}

if (isset($_GET['dir'])) { $currentDir = $baseDir . $_GET['dir'];} 
    else { $currentDir = $baseDir; }
?>
