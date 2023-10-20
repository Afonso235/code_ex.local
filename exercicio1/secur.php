<?php
# default credentials
if (!isset($cfg_secur_user) || !strlen($cfg_secur_user)) {
    $cfg_secur_user = "dev";
}
if (!isset($cfg_secur_pwd) || !strlen($cfg_secur_pwd)) {
    $cfg_secur_pwd = "souledge";
}
if (!isset($_SERVER["PHP_AUTH_USER"])) {
    header('WWW-authenticate: basic realm="Em Desenvolvimento"');
    header('HTTP/1.0 401 Unauthorized');
    exit();
} else {
    if ($_SERVER["PHP_AUTH_USER"] != $cfg_secur_user || $_SERVER["PHP_AUTH_PW"] != $cfg_secur_pwd) {
        header('WWW-authenticate: basic realm="Em Desenvolvimento"');
        header('HTTP/1.0 401 Unauthorized');
        echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
        <html>
        <head>
            <title>401 Unauthorized</title>
        </head>
        <body>
            <h1>Unauthorized</h1>
            <p>You don\'t have permission to access ' . $_SERVER['REQUEST_URI'] . ' on this server.</p>
        </body>
        </html>
        ';
        exit();
    }
}