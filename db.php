<?php
$db['db_host'] = "localhost";
$db['db_name'] = "code_ex";
$db['db_user'] = "root";
$db['db_pass'] = "HCdofHG4";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>
