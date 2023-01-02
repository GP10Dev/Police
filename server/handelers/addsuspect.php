<?php
$ssfname = $_POST['fname'];
$sslname = $_POST['lname'];
$ssoname = $_POST['oname'];
$ssnin = $_POST['nin'];
$ssdob = $_POST['dob'];
$ssadd = $_POST['address'];
$sstribe = $_POST['tribe'];
$ssphone = $_POST['phone'];
$sscref = $_POST['sdref'];
$ssstatus = $_POST['status'];
$ssdesc = $_POST['desc'];
$ssgender = $_POST['gender'];

//  set sql code
$sql = "INSERT INTO `suspect`( `fname`, `lname`, `oname`,
 `caseRef`, `nin`, `dob`, `phone`, `status`,
  `address`, `tribe`, `gender`, `descrip`) 
VALUES ('".$ssfname."','".$sslname."','".$ssoname."',
'".$sscref."','".$ssnin."','".$ssdob."','".$ssphone."','".$ssstatus."',
'".$ssadd."','".$sstribe."','".$ssgender."',\"".$ssdesc."\");";

// open conn
require "setcon.php";

$runsql = mysqli_query($con, $sql);
if(!$runsql){
    die("failed to add data to db");
}

require "endcon.php";

header("Location: ./../../exhibits.php");
/* 
    Known cases
    >> cases might not have initially been in system
    >> cases moght be reported by Uganda
    >> no suspect health updates
    >> doesnot accept double quotes in the feilds
*/
?>