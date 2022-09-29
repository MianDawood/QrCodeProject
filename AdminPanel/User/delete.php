<?php

require '../process/connection.php';

$uid = $_GET['Uid'];
$sql = "delete from users where user_id = '$uid'";
$execute = mysqli_query($connect,$sql);
if($execute)
{
    header('location:../usertable.php?msg=success');
    exit();
}
else
{
    header('location:../usertable.php?msg=error');
    exit();
}

?>