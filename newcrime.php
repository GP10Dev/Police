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
                <form action="./server/addnewcrime.php" method="post">
                    <div><h3>Reporter</h3></div>
                    <div class="cls"></div>
                    <div>
                        <label>First Name</label>
                        <input name="fname" type='text' >
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input name="lname" type='text' >
                    </div>
                    <div>
                        <label>Other Name</label>
                        <input name="oname" type='text' >
                    </div>
                    <div>
                        <label>Gender</label>
                        <input name="gender" type="text" list="gender">
                        <datalist id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </datalist>
                    </div>
                    <div>
                        <label>NIN Name</label>
                        <input name="nin" type='text' >
                    </div>
                    <div>
                        <label>Date of birth</label>
                        <input name="dob" type='text' >
                    </div>
                    <div>
                        <label>Address</label>
                        <input name="addr" type='text' >
                    </div>
                    <div>
                        <label>Tribe</label>
                        <input name="tribe" type='text' >
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
                        <input type='radio' name="anysus"> <label>Yes</label>
                        <input type='radio' name="anysus"> <label>No</label>
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
                   <!-- <div class='cls'></div> -->
                    <div>
                        <input type='submit' value='file case'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='button' value='reset'/>
                    </div>
                </form>
            </div>
            
        </section>
    </section>
</body>
</html>