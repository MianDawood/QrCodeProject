<?php 
    require "../includes/conn.php";

    header('Access-Control-Allow-Origin: *');  
  
    if (move_uploaded_file($_FILES["file"]["tmp_name"], "../assets/images/qr-logo/".$_FILES['file']['name'])) {
        $filename = $_FILES['file']['name'];
        $id = $_SESSION['userId'];
        $logoQuery = "INSERT INTO `qr_logo`(`logo_name`, `user_id`) VALUES ('$filename','$id')";
        $execute = mysqli_query($con, $logoQuery);

        echo "done";
        exit;
    }
  
    echo "failed";
?>