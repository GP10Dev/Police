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
            <h3>My Profiles</h3>
        <div>
                <form method="post" action="./server/handelers/profile.php">
                <div>
                        <label>Force Number</label>
                        <input type="text" name="force_number" value="<?php echo $_SESSION['sfnum']; ?>">
                    </div>    
                <div>
                        <label>First Name</label>
                        <input type="text" name="fname"  value="<?php echo $_SESSION['sfnum']; ?>">
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type='text' name="lname"  value="<?php echo $_SESSION['slname']; ?>" >
                    </div>
                    <div>
                        <label>Other Name</label>
                        <input type='text' name="oname"  value="<?php echo $_SESSION['soname']; ?>">
                    </div>
                    <div>
                        <label>NIN Name</label>
                        <input type='text' name="nin"  value="<?php echo $_SESSION['snin']; ?>">
                    </div>
                    <div>
                        <label>Gender</label>
                        <input type='text' name="gender" value="<?php echo $_SESSION['sgender']; ?>" >
                    </div>
                    <div>
                        <label>Date of birth</label>
                        <input type='date' name="dob"  value="<?php echo $_SESSION['sdob']; ?>" >
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type='tel' name="phone"  value="<?php echo $_SESSION['sphone']; ?>" >
                    </div>
                    <div>
                        <label>Rank</label>
                        <input type='text' name="rank" value="<?php echo $_SESSION['srank']; ?>" >
                    </div>
                    <div>
                        <label>Department</label>
                        <input type='text' name="department"  value="<?php echo $_SESSION['sdepartment']; ?>">
                    </div>
                    <div>
                        <label>Tribe</label>
                        <input type='text' name="tribe"  value="<?php echo $_SESSION['stribe']; ?>" >
                    </div>
                    <div>
                        <label>Station of Attachment</label>
                        <input type='text' name="station"  value="<?php echo $_SESSION['sstation']; ?>" >
                    </div>
                    <div>
                        <label>password</label>
                        <input type="password" name="password"  value="<?php echo $_SESSION['spassword']; ?>">
                    </div>
                    <div class="cls"></div>
                    <section style="text-align: center;">
                        <input style="width: 45%; float: left;" type="submit" value="Save changes">
                        <input style="width: 50%; float: left;" type="reset" value="Abort">
                        <div class="cls"></div>
                    </section>
                </form>
            </div>
        </section>
    </section>
</body>
</html>