<?php
    // reporter particulars
    $rfname = $_POST['fname'];
    $rlname = $_POST['lname'];
    $roname = $_POST['oname'];
    $rgen = $_POST['gender']; // must be female or male
    $rnin = $_POST['nin'];
    $rdob = $_POST['dob'];
    $radd = $_POST['addr'];
    $rtribe = $_POST['tribe']; 
    $rphone = $_POST['phone'];
    // case details
    $cdoc = $_POST['doc']; // date of occurance
    $anysus = $_POST['anysus']; // whether or not are there suspects
    $cdesc = $_POST['descr']; // reporters statement
    $cscene = $_POST['scene'];

    if(isset($_POST['sdref'])){
        $sdref = $_POST['sdref'];}
    else{
        $sdref = createsdref(); // set own sdref in format sdref-date-num
    }
?>