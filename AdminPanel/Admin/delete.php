<?php

require '../process/connection.php';

$aid = $_GET['Aid'];
                                                //and adminId = {$_SESSION['ADMINID']}
$sql = "delete from admin where adminId = '$aid'";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../admintable.php?msg=success');
    exit();
}
else
{
    header('location:../admintable.php?msg=error');
    exit();
}

?>