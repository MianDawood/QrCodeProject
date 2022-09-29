<?php

require '../process/connection.php';

$sql = "delete from pakages";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../pakagetable.php?sms=success');
    exit();
}
else
{
    header('location:../pakagetable.php?sms=error');
    exit();
}

?>