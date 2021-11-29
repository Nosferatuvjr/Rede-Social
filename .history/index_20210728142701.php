<?php

    session_start();
    date_default_timezone_set('America/Manaus');

    require("vendor/autoload.php");
    
    define('INCLUDE_PATH_STATIC','http://localhost/');
    define('INCLUDE_PATH','http://localhost/redesocial/AmDev/Views/');

    $app = new AmDev\Application();

    $app->run();

?>