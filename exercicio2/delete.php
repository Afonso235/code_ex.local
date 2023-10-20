<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['file'])) {
    $fileToDelete = $_POST['file'];
    
    if (is_file($fileToDelete)) {
        unlink($fileToDelete); 
    }
        header('Location: index.php');
}
