<?php
$refarr = explode("#", $_POST['exref']);
$exref = end($refarr);
$exdod = $_POST['dod'];
$exfdisp = $_POST['fdisp'];
$exfdnin = $_POST['fdnin'];
$exdispby = $_POST['dispby'];

$sql = "UPDATE `exhibits` SET 
`DoD`='" . $exdod . "',`finaldisp`='" . $exfdisp . "',
`nin`='" . $exfdnin . "',`disposedby`='" . $exdispby . "' 
WHERE `serialNum`='" . $exref . "';";

require "setcon.php";

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