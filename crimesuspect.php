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
    <link rel="stylesheet" href="./static/css/crime.css"/>
    <link rel="stylesheet" href="./static/css/form.css" />

    <style>
        .linDisp{
            display: inline;
            width: auto;
        }
        input.linDisp{
            margin-right: 10px;
        }
        label.linDisp{
            margin-right: 30px;
        }
    </style>
    <script>
        function valcheck(txt){
            len = txt.length;
            lst = txt[len-1];
            if(lst=='"'){
                alert('bad symbol (") has been keyed as input. Use the \' instead.');
                document.getElementById("desc").value = txt; // remove last character
            }
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
                <li>Assignments</li>
                <li>Reminders</li>
                <li>Log out</li>
            </ul>
        </header>
        <section id="main">
            <div>
                <h2>New crime Suspect</h2>
            </div>
            <div>
                <form method="post" action="./server/handelers/addsuspect.php">
                    <div><h3>Suspect Details</h3></div>
                    <div  class="cls"></div>
                    <div>
                        <label>First Name</label>
                        <input type='text' name="fname" >
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
                        <label>Date of birth</label>
                        <input type='date' name="dob" >
                    </div>
                    <div>
                        <label>Gender</label>
                        <input type='text' name="gender" list="gender" >
                        <datalist id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </datalist>
                    </div>
                    <div>
                        <label>Address</label>
                        <input type='text' name="address" >
                    </div>
                    <div>
                        <label>Tribe</label>
                        <input type='text' name="tribe" >
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type='text' name="phone" >
                    </div>
                    <section style="padding-top: 20px;">
                        <p class="linDisp" style="margin-right:50px">Suspect Status</p>
                        <input class="linDisp" type='radio' name="status" value="1" required>
                        <label class="linDisp">Arrested</label>
                        <input class="linDisp" type='radio' name="status" value="2" required>
                        <label class="linDisp">Not Arrested</label> 
                        <input class="linDisp" type='radio' name="status" value="3" required>
                        <label class="linDisp">Released</label>
                    </section>
                    <div class="cls"></div>
                    <div>
                        <h2>case details</h2>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <label>SD REF</label>
                        <input type='text' name="sdref" >
                    </div>
                    <div>
                        <label>Description of crime</label>
                        <textarea name="desc" onkeyup="valcheck(this.value)" placeholder="what happened?" col='40' row='10'></textarea >
                    </div>
                    <div>
                        <input type='submit' value='Attach'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='reset' value='reset'/>
                    </div>
                </form>
            </div>

            <?php
            if (isset($_SESSION['lastcase'])) {
                echo "
                <section>
                    <p>Your last case was " . $_SESSION['lastcase'] . "</p>
                </section> ";
                unset($_SESSION['lastcase']);
            }
            ?>
        </section>
    </section>
</body>
</html>