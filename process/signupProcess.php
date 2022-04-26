<?php

include('../includes/conn.php');

if(isset($_POST['reg']) && $_POST['reg'] == 'user')
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "insert into users set username='$username', email='$email', password='$password' ";

    $execute = mysqli_query($con,$query);

    if($execute)
    {
        header('Location:../index.php?success');
    }
    else
    {
        header('Location:../index.php?failed');

    }

    
}
else
{
echo "please fill the signup form first";
}

?>