<?php 

include('../includes/conn.php');

if(isset($_POST['log']) && $_POST['log'] == 'in')
{
    $email = $_POST['email'];
    $password = $_POST['password'];

     $query = "select * from users where email='$email' AND password = '$password'";

    $execute = mysqli_query($con,$query);

    $num = mysqli_num_rows($execute);

    if($num > 0)
    {
            $record = mysqli_fetch_array($execute);
        
            $_SESSION['Username'] = $record['username'];
            $_SESSION['userId'] = $record['user_id'];

            header('Location:../qr-gen.php?success');
    }
    else
    {
       header('Location:../index.php?failed');
    }
   

}
else
{
    echo 'Not login';
}

?>