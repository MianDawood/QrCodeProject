<?php

require '../process/connection.php';

$sql = "delete from userplane";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../userplanTable.php?sms=success');
    exit();
}
else
{
    header('location:../userplanTable.php?sms=error');
    exit();
}

?>