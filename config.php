<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'site');
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    date_default_timezone_set('America/Sao_Paulo');
    session_start();

    function rescape($con, $var){
        $var2 = mysqli_real_escape_string($con, $var);
        return $var2;
    }
?>