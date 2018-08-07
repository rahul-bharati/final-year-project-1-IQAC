<?php
    define("DB_SERVER","103.21.58.5");
    define("DB_USER","rahul_b");
    define("DB_PASS","Rahul@8080");
    define("DB_NAME","iqac");
    define("DB_PORT","3306");

    $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME,DB_PORT);

    if($con->connect_error)
    {
        die("mysqli connect error: " . $con->connect_error);
    }
?>