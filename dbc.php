<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tvm";

$connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$connection)
{
    die("Connection Failed: ".mysqli_connect_error());
}
