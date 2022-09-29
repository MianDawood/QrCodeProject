<?php

require '../process/connection.php';

$sql = "delete from users";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../usertable.php?sms=success');
    exit();
}
else
{
    header('location:../usertable.php?sms=error');
    exit();
}

?>