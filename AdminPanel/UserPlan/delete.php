<?php

require '../process/connection.php';

$upid = $_GET['upid'];
                                                //and adminId = {$_SESSION['ADMINID']}
$sql = "delete from userplane where upId = '$upid'";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../userplanTable.php?msg=success');
    exit();
}
else
{
    header('location:../userplanTable.php?msg=error');
    exit();
}

?>