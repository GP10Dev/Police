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
                <h2>New crime record</h2>
            </div>
            <div>
                <form action="./server/handelers/addnewcrime.php" method="post">
                    <div><h3>Reporter</h3></div>
                    <!-- <div>
                        <p>Is case being reported by uganda?</p>
                        <input type="checkbox" onchange="byug(this.value)" id="govrep"/>
                    </div>
                    <div>&nbsp;</div> -->
                    <div class="cls"></div> 
                    <div class="rdata">
                        <label>First Name</label>
                        <input name="fname" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Last Name</label>
                        <input name="lname" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Other Name</label>
                        <input name="oname" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Gender</label>
                        <input name="gender" type="text" list="gender">
                        <datalist id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </datalist>
                    </div>
                    <div class="rdata">
                        <label>NIN Name</label>
                        <input name="nin" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Date of birth</label>
                        <input name="dob" type='date' >
                    </div>
                    <div class="rdata">
                        <label>Address</label>
                        <input name="addr" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Tribe</label>
                        <input name="tribe" type='text' >
                    </div>
                    <div class="rdata">
                        <label>Phone</label>
                        <input name="phone" type='tel' >
                    </div>
                    <div class="cls"></div>
                    <div>
                        <h2>case details</h2>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <label>Date of Occurrence</label>
                        <input name="doc" type='date' >
                    </div>
                    <div>
                        <label>Any suspects?</label>
                        <input type='radio' name="anysus" value="yes" required> <label>Yes</label>
                        <input type='radio' name="anysus" value="no"> <label>No</label>
                        <!-- if yes, redirect to the suspects form -->
                    </div>
                    <div>
                        <label>Description of crime</label>
                        <textarea name="descr" rows='7' cols='10' placeholder="what happened?" col='40' row='10'></textarea >
                    </div>
                    <div>
                        <label>Scene crime</label>
                        <textarea name="scene" rows='7' cols='10' placeholder="where it happened?" col='40' row='10'></textarea >
                    </div>
                    <div>
                        <b><p>if case already exists, enter case ref here. else leave as is</p></b>
                        <input type="text" name="sdref"/>
                    </div>
                    <!-- <div></div> -->
                   <div class='cls'></div>
                    <div>
                        <input type='submit' value='file case'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='reset' value='reset'/>
                    </div>
                </form>
            </div>
            
        </section>
    </section>
    <!-- <script src="./static/js/byug.js"></script> -->
</body>
</html>