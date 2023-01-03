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
                <h2>Exhibit Slip.</h2>
            </div>
            <div>
                <form method="post" action="./server/handelers/exhibit.php">
                    <!-- <div>Exhibit Slip Details</div> -->
                    <!-- <div>
                        <label>Serial Number</label>
                        <input type='text' n >
                    </div> -->
                    <div>
                        <label>Case ref</label>
                        <input type="text" name="sdref" />
                    </div>
                    <div>
                        <label>Date</label>
                        <input type='date' name="date">
                    </div>
                    <div>
                        <label>Checked By</label>
                        <input type='text' name="checker"  placeholder="use force number">
                    </div>
                    <div>
                        <label>Received by</label>
                        <input type='text' name="receiver" placeholder="use force number">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea cols="10" name="desc" rows="7"></textarea>
                    </div>
                    <div class="cls">
                        &nbsp;
                    </div>  
                    
                    <div>
                        <input type='submit' value='Attach'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='button' value='reset'/>
                    </div>
                </form>
            </div>
            <p>
                <?php
                if (isset($_SESSION['lstExb'])) {
                    echo "last exhibit id is upfEx#" . $_SESSION['lstExb'][0];
                    unset($_SESSION['lstExb']);
                }
                ?>
            </p>
            <div>
                <form action="./server/handelers/dispexhibit.php">
                    <div class="cls"></div>
                    <div>
                        <h3>Disposal Exihibit</h3>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <label>Exhibit Ref</label>
                        <input type="text" name="exref" />
                    </div>
                    <div>
                        <label>Date of Disposal</label>
                        <input type="date" name="dod">
                    </div>
                    <div>
                        <label>Final Disposal</label>
                        <input type="text" name="fdisp">
                    </div>
                    <div>
                        <label>NIN</label>
                        <input type="text" name="fdnin">
                    </div>
                    <div>
                        <label>Disposed by</label>
                        <input type="text" name="dispby" placeholder="use force number" />
                    </div>
                    <div class="cls"></div>
                    <div>
                        <input type="reset" value="Cancel">

                        <input type="submit" value="Dispose">
                    </div>
                </form>
            </div>
            
        </section>
    </section>
</body>
</html>