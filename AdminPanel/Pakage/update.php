<?php

require '../process/connection.php';

if (isset($_POST['pakage']) && $_POST['pakage'] == 'updation') {
    $PakageName = $_POST['pakagename'];
    $PakageAmount = $_POST['pakageamount'];
    $PakageAmountYearly = $_POST['pakageamountyearly'];
    $PakageDisc = $_POST['pakagedisc'];
    $pakageStatic = $_POST['pakstatic']; 
    $pakageDynamic = $_POST['pakdynamic']; 
    $pakageStatistic = $_POST['pakstatistic']; 
    $pakageCustom = $_POST['pakcustome']; 
    $pakageHighQual = $_POST['pakhighquality']; 
    $PakageTime = $_POST['pakagetime'];
    $PakageUpdate = $_POST['update'];

    $sql = "UPDATE pakages SET
    pakageName = '$PakageName',
    pakageAmount = '$PakageAmount',
    pakageAmountYearly = '$PakageAmountYearly',
    pakageDisc = '$PakageDisc',
    pakageStatic = '$pakageStatic',
    pakageDynamic = '$pakageDynamic',
    pakageStatistics = '$pakageStatistic',
    pakageCustom = '$pakageCustom',
    pakageHighQuality = '$pakageHighQual',
    pakageTime = '$PakageTime'
    WHERE pakageId = '$PakageUpdate'";

    $responce = mysqli_query($connect,$sql);
    if ($responce) {
        header('location:../pakagetable.php?msgs=success');
        exit();
    }
    else{
        header('location:../pakagetable.php?msgs=error');
        exit();
    }
}

?>