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
        session_abort();
    }
    
    // verify if email is force email
    $sect = explode("@",$uname); // divide email into domain and force number
    // check domain
    if($sect[1] !== "upf.go.ug"){
        die("wrong email used. Error code 404x2<br>Go to <a href='./../../login.php'>Login</a>."); // x2 for wrong domain of email
        session_abort();
    }

    // verify force number and passwd 
    require "setcon.php";
    
    $sql = "SELECT `forceNum`, `fname`, `oname`, `lname`, `password` FROM `officer` 
    WHERE `forceNum` = '".$sect[0]."' AND `password` = '".$passwd."';";

    $recon = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($recon); // count rows

    if($rows < 1){
        die("failed to log in. Check credentials and <a href='./../../login.php'>try again</a> Or contact station admin. error 404x4"); //x4 is failed login -> bad details
    } else{
        // set session ('s') variables
        $_SESSION['sfnum'] = $rows['forceNum'];
        $_SESSION['sfname'] = $rows['fname'];
        $_SESSION['slname'] = $rows['lname'];
        $_SESSION['soname'] = $rows['oname'];
        // success

        require "endcon.php";
        header("Location: ./../../app.php");
    }

  /*
    known errors
        >> email may not be case sensitive
    
    error code -x values
        1. failed server --- setcon
        2. wrong domain --- verifylogin -> might not be officer
        3. user name might not be set
        4. bad details ---  -> wrong password or force number
  */  
    
?>