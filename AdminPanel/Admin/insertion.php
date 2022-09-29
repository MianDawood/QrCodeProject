<?php 

require '../process/connection.php';

if(isset($_POST['Admin']) && $_POST['Admin'] == 'Insertion')
{
    $AdminName = $_POST['FullName'];
    $AdminEmail = $_POST['Email'];
    $Adminpassword = $_POST['Password'];
    $AdminAddress = $_POST['Address'];

    $SqlQuery = "INSERT INTO admin SET
    adminName = '$AdminName',
    adminEmail = '$AdminEmail',
    adminPassword = '$Adminpassword',
    adminAddress = '$AdminAddress'";

    $QueryExecute = mysqli_query($connect,$SqlQuery);
    
    if($QueryExecute)
    {
        header('location:../adminform.php?msg=success');
        exit();
    }
    else
    {
        header('location:../adminform.php?msg=error');
        exit();
    }
}

?>