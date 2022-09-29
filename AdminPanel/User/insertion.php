<?php

require '../process/connection.php';

if(isset($_POST['reg']) && $_POST['reg'] == 'user')
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "insert into users set 
    username = '$username', 
    email = '$email', 
    password = '$password'";

    $execute = mysqli_query($connect,$query);

    if($execute)
    {
        header('location:../userform.php?msg=success');
        exit();
    }
    else
    {
        header('location:../userform.php?msg=error');
        exit();

    }

    
}

?>