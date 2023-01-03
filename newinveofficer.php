<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPF APP Dashboard</title>

    <link href="./static/img/policeLogo.jpeg" rel="icon" type="image/png" />
    <link rel="stylesheet" href="./static/css/all.css" />
    <link rel="stylesheet" href="./static/css/app.css" />
    <link rel="stylesheet" href="./static/css/form.css" />

    <script>
    function logout(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200){
                alert("session killed");
                // <?php
                //     sleep(2);
                //     header("location: ./login.php");
                // ?>
            }
        }  ; 
        xmlhttp.open("GET", "./server/logout.php", true);
        xmlhttp.send();
    }
    </script>
</head>
<body>
    <section class="pg-col" id="pg-col-1">
        <div id="head">
            <div id="logo">
                <img src="./static/img/uganda-police-logo.png" alt="upf uganda police force transparent logo"/>
            </div>
            <h2>Uganda Polic Force</h2>
            <div class="cls"><p>&nbsp;</p></div>
        </div>
        <nav>
            <?php require "./server/nav.php" ; ?>
        </nav>
        <div class="cls"></div>
    </section>
    <section class="pg-col"  id="pg-col-2">
        <header>
            <section id="emerg">
                <?php include "./server/emergency.php" ?>
            </section>
            <ul>
                <?php require './server/sec_nav.php'; ?>
            </ul>
        </header>
        <section id="main">
            <div>
                <h3>Officers</h3>
                <p>New Investigating officer.  Only registered by OC</p>
            </div>
            
            <div>
                <form method="post" action="./server/handelers/addofficer.php">
                <div>
                        <label>Force Number</label>
                        <input type="text" name="force_number">
                    </div>    
                <div>
                        <label>First Name</label>
                        <input type="text" name="fname">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type='text' name="lname" >
                    </div>
                    <div>
                        <label>Other Name</label>
                        <input type='text' name="oname" >
                    </div>
                    <div>
                        <label>NIN Name</label>
                        <input type='text' name="nin" >
                    </div>
                    <div>
                        <label>Gender</label>
                        <input type='text' name="gender" >
                    </div>
                    <div>
                        <label>Date of birth</label>
                        <input type='date' name="dob" >
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type='tel' name="phone" >
                    </div>
                    <div>
                        <label>Rank</label>
                        <input type='text' name="rank" >
                    </div>
                    <div>
                        <label>Department</label>
                        <input type='text' name="department" >
                    </div>
                    <div>
                        <label>Tribe</label>
                        <input type='text' name="tribe" >
                    </div>
                    <div>
                        <label>Station of Attachment</label>
                        <input type='text' name="station" >
                    </div>
                    <!-- <div>
                        <label>password</label>
                        <input type="password" name="password">
                    </div> -->
                    <div>
                        <P>Default password is their Force Number.</P>
                    </div>
                    <div>
                        <input type="submit" value="Deploy">
                        <input type="reset" value="Cancel">
                    </div>
                </form>
            </div>
            
        </section>
    </section>
    <script>
        let dep = <?php echo $_SESSION['sdepartment']; ?>
        if(dep != 'IT' || dep != 'it' || dep != 'OC' || dep != 'oc' ){
            let arr = document.querySelectorAll('input');
            for(let k = 0; k<arr.length; k++){
                arr[k].setAttribute('reaadonly');
            }
            alert('this page is strictly for higher admin');
        }
    </script>
</body>
</html>