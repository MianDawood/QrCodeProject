<?php

require '../process/connection.php';

$pid = $_GET['pid'];
$sql = "delete from pakages where pakageId = '$pid'";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../pakagetable.php?msg=success');
    exit();
}
else
{
    header('location:../pakagetable.php?msg=error');
    exit();
}

?>