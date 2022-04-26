<?php
$con = mysqli_connect("localhost","root", "") or die('server connection error');

$db = mysqli_select_db($con,"QrCode") or die('database connection error');

session_start();

?>