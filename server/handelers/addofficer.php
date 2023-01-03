<?php
session_start();

$force_number = $_POST['force_number'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$oname = $_POST['oname'];
$nin = $_POST['nin'];
$gender = $_POST['gender'];
$dob = $_POST["dob"];
$phone = $_POST['phone'];
$rank = $_POST['rank'];
$department = $_POST['department'];
$tribe = $_POST['tribe'];
$station = $_POST['station'];
$password = $force_number;

// default password is forcenumber


require "setcon.php";

// Insert the data into the database
// $sql = "INSERT INTO officer (fname, lname, oname, nin, gender, dob, phone, rank, department, tribe, station) VALUES ('$fname', '$lname', '$oname', '$nin', '$gender', '$dob', '$phone', '$rank', '$department', '$tribe', '$station')";
$sql = "INSERT INTO officer (`forceNum`, `fname`, `lname`, `oname`, `nin`, `gender`, `dob`, `phone`, `rank`, `department`, `tribe`, `station`, `password`) VALUES ('$force_number', '$fname', '$lname', '$oname', '$nin', '$gender', '$dob', '$phone', '$rank', '$department', '$tribe', '$station', '$password')";


if(
    ! mysqli_query(
        $con,
        $sql
    )
){
    require "endcon.php";
    die("failed to update the data");
}

require "endcon.php";

header("Location: ./../../app.php");

?>