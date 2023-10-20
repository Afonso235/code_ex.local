<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['file'])) {
    $fileToDelete = $_POST['file'];
    
    if (is_file($fileToDelete)) {
        unlink($fileToDelete); 
        $parentDir = dirname($fileToDelete);
        if (is_dir($parentDir) && count(scandir($parentDir)) === 2) {
            rmdir($parentDir);
        }
    }
        header('Location: index.php');
}
