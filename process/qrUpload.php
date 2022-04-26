<?php 
    require "../includes/conn.php";
    $_POST = json_decode(file_get_contents("php://input"),true);

    $data = $_POST["data"];
    $cat = $_POST["category"];
    $style = $_POST["style"];

    $bgcolor = $style["backgroundColor"];
    $colorType = $style["color"];
    $dotColorGradiantType = $style["dotColorGradiantType"];
    $dotEyeColorGradiantType = $style["dotEyeColorGradiantType"];
    $singleColor = $style["singleColor"];
    $gradiantColorOne = $style["gradiantColorOne"];
    $gradiantColorTwo = $style["gradiantColorTwo"];
    $singleEyeColor = $style["singleEyeColor"];
    $gradiantEyeColorOne = $style["gradiantEyeColorOne"];
    $gradiantEyeColorTwo = $style["gradiantEyeColorTwo"];
    $qrImage = $style["qrImage"];

    
    $id = $_SESSION["userId"];
    $link = $data["url"];


    $tableQuery = "INSERT INTO `qrCode_table`
    (`user_id`, 
    `qr_content`, 
    `qr_category`, 
    `qr_bgcolor`, 
    `qr_colorType`,
    `qr_dotColorGradiantType`, 
    `qr_dotEyeColorGradiantType`, 
    `qr_singleColor`, 
    `qr_gradiantColorOne`, 
    `qr_gradiantColorTwo`, 
    `qr_singleEyeColor`, 
    `qr_gradiantEyeColorOne`, 
    `qr_gradiantEyeColorTwo`, 
    `qr_qrImage`) 
    VALUES 
    ('$id',
    '$link',
    '$cat',
    '$bgcolor',
    '$colorType',
    '$dotColorGradiantType',
    '$dotEyeColorGradiantType',
    '$singleColor',
    '$gradiantColorOne',
    '$gradiantColorTwo',
    '$singleEyeColor',
    '$gradiantEyeColorOne',
    '$gradiantEyeColorOne',
    '$qrImage')";

    $execute = mysqli_query($con, $tableQuery);

    if($execute) {
        echo "success";
    }
?>