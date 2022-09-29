<?php 

require '../process/connection.php';

if(isset($_POST['Admin']) && $_POST['Admin'] == 'Update')
{
    $AdminName = $_POST['FullName'];
    $AdminEmail = $_POST['Email'];
    $Adminpassword = $_POST['Password'];
    $AdminAddress = $_POST['Address'];
    $update = $_POST['update'];

    $SqlQuery = "UPDATE admin SET
    adminName = '$AdminName',
    adminEmail = '$AdminEmail',
    adminPassword = '$Adminpassword',
    adminAddress = '$AdminAddress'
    where adminId = '$update'";

    $QueryExecute = mysqli_query($connect,$SqlQuery);
    
    if($QueryExecute)
    {
        header('location:../admintable.php?msgs=success');
        exit();
    }
    else
    {
        header('location:../admintable.php?msgs=error');
        exit();
    }
}

?>