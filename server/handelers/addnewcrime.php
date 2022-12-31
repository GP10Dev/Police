<?php
    session_start();
    require "functions.php" ;
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

    if($_POST['sdref'] != ""){
        $sdref = $_POST['sdref'];
        $state = 0; // indicates that ref is set by user
    }
    else{
        $sdref = createsdref(); // set own sdref in format sdref-date-num
        $state = 1; // indicates that ref is set by system
    }

    echo "Case reference is " . $sdref;

    // add case to system -> prepare sql
    $sqlcase = "INSERT INTO `crimecase`(`caseRef`, `reportDate`, `Scene`, `doc`, `attachedOfficer`)
     VALUES ('".$sdref."',null,'".$cscene."','".$cdoc."','".$_SESSION['sfnum']."');";
    $sqlrep = "INSERT INTO 
    `reporter`(`fname`, `lname`, `oname`, 
            `phone`, `caseRef`, `nin`, `dob`, 
            `address`, `tribe`, `gender`, `descrip`) 
            VALUES ('".$rfname."','".$rlname."','".$roname."',
            '".$rphone."','".$sdref."','".$rnin."','".$rdob."',
            '".$radd."','".$rtribe."','".$rgen."','".$cdesc."')";
    
    // run sql
    require "setcon.php";
    $recon = mysqli_query($con, $sqlcase);
    if(!$recon){
        die("Failed to add case.");
    }
    $recon = mysqli_query($con, $sqlrep);
    if(!$recon){
        die("case added -> failed to attach report.");
    }
    require "endcon.php";
    
    echo "<br>Case was added successfully.<br>";
    // echo ""

    // Ignore user interruptions
    ignore_user_abort(true);

    // Set the maximum execution time to 60 seconds
    set_time_limit(40);

    // Turn off error reporting
    error_reporting(0);

    try {
        // Sleep for 5 seconds
        sleep(5);
        if($anysus == "yes"){
            $_SESSION['lastcase'] = $sdref; // for passing to next page
            header("Location: ./../../crimesuspect.php");
        }
        else if($anysus == "no")
            header("Location: ./../../app.php");
    } catch (Exception $e) {
        // Output an error message
        echo 'An error occurred: ' . $e->getMessage();
    }
?>