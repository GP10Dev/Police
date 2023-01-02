<?php
require "./handelers/setcon.php";

// count cases today
$sql = "SELECT COUNT(*) FROM `crimecase` WHERE `caseRef` LIKE '%".date("d/m/Y")."%';";
$qry = mysqli_query($con, $sql);
$tc = mysqli_fetch_row($qry);


//count all cases
$sql = "SELECT COUNT(*) FROM `crimecase` ;";
$qr_y = mysqli_query($con, $sql);
$ac = mysqli_fetch_row($qr_y);


//count exhibits
$sql = "SELECT COUNT(*) FROM `exhibits` ;";
$qr_y = mysqli_query($con, $sql);
$ec = mysqli_fetch_row($qr_y);

$arr = array($tc[0], $ac[0], $ec[0]);
echo json_encode($arr);

require "./handelers/endcon.php";
?>