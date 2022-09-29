<?php

require '../process/connection.php';

$cid = $_GET['cid'];
$sql = "delete from contact where cId = '$cid'";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../contactTable.php?msg=success');
    exit();
}
else
{
    header('location:../contactTable.php?msg=error');
    exit();
}

?>