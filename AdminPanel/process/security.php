<?php
 if(!isset($_SESSION['ADMINID']))
 {
   header('location:index.php?msg=you not access directly please first login');
   exit();
 }
?>