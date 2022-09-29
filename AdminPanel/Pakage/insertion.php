<?php

require '../process/connection.php';

if (isset($_POST['pakage']) && $_POST['pakage'] == 'insertion') {
    $PakageName = ucfirst($_POST['pakagename']);
    $PakageAmount = $_POST['pakageamount'];
    $PakageAmountYearly = $_POST['pakageamountyearly'];
    $PakageDisc = $_POST['pakagedisc'];
    $pakageStatic = $_POST['pakstatic']; 
    $pakageDynamic = $_POST['pakdynamic']; 
    $pakageStatistic = $_POST['pakstatistic']; 
    $pakageCustom = $_POST['pakcustome']; 
    $pakageHighQual = $_POST['pakhighquality']; 
    $PakageTime = $_POST['pakagetime'];

    $sql = "INSERT INTO pakages SET
    pakageName = '$PakageName',
    pakageAmount = '$PakageAmount',
    pakageAmountYearly = '$PakageAmountYearly',
    pakageDisc = '$PakageDisc',
    pakageStatic = '$pakageStatic',
    pakageDynamic = '$pakageDynamic',
    pakageStatistics = '$pakageStatistic',
    pakageCustom = '$pakageCustom',
    pakageHighQuality = '$pakageHighQual',
    pakageTime = '$PakageTime'";

    $responce = mysqli_query($connect,$sql);
    if ($responce) {
        header('location:../pakageform.php?msg=success');
        exit();
    }
    else{
        header('location:../pakageform.php?msg=error');
        exit();
    }
}

?>