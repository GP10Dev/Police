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
                <p>0</p>
                <p>New cases today</p>
            </section>
            <section>
                <p>0</p>
                <p>New new exhibits</p>
            </section>
            <div class="cls"></div>
            <section>
                <p>0</p>
                <p>Total cases</p>
            </section>

            <div class="cls"></div>

        </section>
    </section>
    <!-- <footer>hey</footer> -->
</body>
</html>