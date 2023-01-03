<?php
    session_start(); 
    // login verififaction
    if(isset($_POST['user'])){
        $uname = $_POST['user'];
        $passwd = $_POST['passwd'];
        if(isset($_POST['cookieopt']))
        $opt = $_POST['cookieopt']; // for cookies 
    } else{
        die("no valid credentials found. Fields were empty. Error 404x3"); //x3 is blank fields sent
        session_destroy();
    }
    
    // verify if email is force email
    $sect = explode("@",$uname); // divide email into domain and force number
    // check domain
    if($sect[1] !== "upf.go.ug"){
        die("wrong email used. Error code 404x2<br>Go to <a href='./../../login.php'>Login</a>."); // x2 for wrong domain of email
        session_destroy();
    }

    // verify force number and passwd 
    require "setcon.php";
    
    $sql = "SELECT `forceNum`, `fname`, `oname`, `lname`, `password`, `department` FROM `officer` 
    WHERE `forceNum` = '".$sect[0]."' AND `password` = '".$passwd."';";

    $recon = mysqli_query($con, $sql);
    $num_rows = mysqli_num_rows($recon); // count rows

    if($num_rows < 1){
        die("failed to log in. Check credentials and <a href='./../../login.php'>try again</a> Or contact station admin. error 404x4"); //x4 is failed login -> bad details
    } else{
        // set session ('s') variables
        $rows = mysqli_fetch_assoc($recon);
        $_SESSION['sfnum'] = $rows['forceNum'];
        $_SESSION['sfname'] = $rows['fname'];
        $_SESSION['slname'] = $rows['lname'];
        $_SESSION['soname'] = $rows['oname'];
        $_SESSION['sdepartment'] = $rows['department'];
        // success

        require "endcon.php";
        header("Location: ./../../app.php");
    }

  /*
    known errors
        >> email may not be case sensitive
        >> cookies were not set
    
    error code -x values
        1. failed server --- setcon
        2. wrong domain --- verifylogin -> might not be officer
        3. user name might not be set
        4. bad details ---  -> wrong password or force number
  */  
    
?>