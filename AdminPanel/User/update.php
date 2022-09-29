<?php

require '../process/connection.php';

if(isset($_POST['reg']) && $_POST['reg'] == 'update')
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $update = $_POST['update'];
    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "Update users set 
    username = '$username', 
    email = '$email', 
    password = '$password'
    where user_id = '$update'";
    
    $execute = mysqli_query($connect,$query);

    if($execute)
    {
        header('location:../usertable.php?msgs=success');
        exit();
    }
    else
    {
        header('location:../usertable.php?msgs=error');
        exit();

    }

    
}

?>