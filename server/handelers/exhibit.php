<?php
session_start();
$esdref = $_POST['sdref'];
$edate = $_POST["date"];
$echecker = $_POST['checker'];
$erec = $_POST['receiver'];
$edesc = $_POST['desc'];

$sql = "INSERT INTO `exhibits`
(`caseRef`, `date`, `checkedby`, `description`, `receivedby`) 
VALUES ('".$esdref."','".$edate."','".$echecker."','".$edesc."','".$erec."');";

require "setcon.php";
$setdata = mysqli_query($con, $sql);
if(!$setdata){
    die("failed to attach content");
}

// count and pass last id
$_SESSION['lstExb'] = mysqli_fetch_row(
    mysqli_query(
        $con,
        "select count(*) from exhibits;"
    )
); // returns array

require "endcon.php";

header("location: ./../../exhibits.php");

?>