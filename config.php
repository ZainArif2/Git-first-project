<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "mywebiste");

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($db == false){

    die("Database not connected". mysqli_connect_error());

}else
{
    // echo "database connected";
}

// echo GREETING;



