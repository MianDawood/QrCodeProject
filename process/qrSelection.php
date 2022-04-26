<?php 
    require "../includes/conn.php";

    $_POST = json_decode(file_get_contents("php://input"),true);

    $id = $_POST["id"];

    $selectQuery = "SELECT * FROM `qrCode_table` WHERE qr_id = $id";
    $execute = mysqli_query($con, $selectQuery);

    $data = mysqli_fetch_array($execute);

    echo json_encode($data);

?>