<?php

require '../process/connection.php';

$sql = "delete from admin";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../admintable.php?sms=success');
    exit();
}
else
{
    header('location:../admintable.php?sms=error');
    exit();
}

?>