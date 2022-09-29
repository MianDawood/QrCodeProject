<?php

require '../process/connection.php';

$sql = "delete from contact";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../contactTable.php?sms=success');
    exit();
}
else
{
    header('location:../contactTable.php?sms=error');
    exit();
}

?>