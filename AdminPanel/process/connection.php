<?php

session_start();

$connect = mysqli_connect("localhost","root","","qrcode");

if(mysqli_connect_errno())
{
    echo "Database Not Connected Successfully <br>". "This error occur " . mysqli_connect_error() ;
    exit();
}

?>