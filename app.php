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
    <link rel="stylesheet" href="./static/css/board.css" />

    <script>
        function setdashboard(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if(this.readyState == 4 && this.status == 200){
                    var resp = this.responseText;
                    var data = JSON.parse(resp);
                    document.getElementById("td_cases").innerHTML = data[0];
                    document.getElementById("exhibits").innerHTML = data[2];
                    document.getElementById("all_cases").innerHTML = data[1];
                }
            }  ; 
            xmlhttp.open("GET", "./server/appcount.php", true);
            xmlhttp.send();
        }
    </script>
</head>
<body onload="setdashboard()">
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
                <li>Assignments</li>
                <li>Reminders</li>
                <li>Log out</li>
            </ul>
        </header>
        <section id="main">
            <div id='intro'>
                <p>Welcome back, <span><?php echo $_SESSION['sfname'] ; ?></span></p>
            </div>
            <section>
                <p id="td_cases">0</p>
                <p>New cases today</p>
            </section>
            <section>
                <p id="exhibits">0</p>
                <p>New new exhibits</p>
            </section>
            <div class="cls"></div>
            <section>
                <p id="all_cases">0</p>
                <p>Total cases</p>
            </section>

            <div class="cls"></div>

        </section>
    </section>
    <!-- <footer>hey</footer> -->
    
</body>
</html>