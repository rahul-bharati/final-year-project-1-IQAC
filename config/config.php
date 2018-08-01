<?php
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASS","72485");
    define("DB_NAME","iqac");

    $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

    if($con->connect_error)
    {
        die("mysqli connect error: " . $con->connect_error);
    }
?>