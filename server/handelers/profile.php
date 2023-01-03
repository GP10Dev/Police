<?php
    session_start();
    $_SESSION['sfnum'] = $_POST['force_number'];
    $_SESSION['sfname'] = $_POST['fname'];
    $_SESSION['slname'] = $_POST['lname'];
    $_SESSION['soname'] = $_POST['oname'];
    $_SESSION['sdepartment'] = $_POST['department'];
    $_SESSION['sdob'] = $_POST['dob'] ;
    $_SESSION['snin'] = $_POST['nin'] ;
    $_SESSION['srank'] = $_POST['rank'] ;
    $_SESSION['stribe'] = $_POST['tribe'] ;
    $_SESSION['sgender'] = $_POST['gender'] ;
    $_SESSION['sphone'] = $_POST['phone'] ;
    $_SESSION['sstation'] = $_POST['station'] ;
    $_SESSION['spassword'] = $_POST['password'] ;

$sql = "
    UPDATE `officer` SET 
    `forceNum`='" . $_SESSION['sfnum'] . "',
    `fname`='" . $_SESSION['sfname'] . "',
    `oname`='" . $_SESSION['soname'] . "',
    `lname`='" . $_SESSION['slname'] . "',
    `dob`='" . $_SESSION['sdob'] . "',
    `nin`='" . $_SESSION['snin'] . "',
    `gender`='" . $_SESSION['sgender'] . "',
    `phone`='" . $_SESSION['sphone'] . "',
    `rank`='" . $_SESSION['srank'] . "',
    `department`='" . $_SESSION['sdepartment'] . "',
    `tribe`='" . $_SESSION['stribe'] . "',
    `station`='" . $_SESSION['sstation'] . "',
    `password`='" . $_SESSION['spassword'] . "' 
    WHERE `forceNum`='" . $_SESSION['sfnum'] . "' ;
    ";
require "setcon.php";
mysqli_query($con, $sql);
require "endcon.php";
header("Location: ./../../app.php");
?>