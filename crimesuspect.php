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
                <h2>New crime Suspect</h2>
            </div>
            <div>
                <form>
                    <div><h3>Suspect Details</h3></div>
                    <div  class="cls"></div>
                    <div>
                        <label>First Name</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Last Name</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Other Name</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>NIN Name</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Date of birth</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Address</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Tribe</label>
                        <input type='text' >
                    </div>
                    <div class="cls"></div>
                    <div>
                        <h2>case details</h2>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <label>SD REF</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Description of crime</label>
                        <textarea placeholder="what happened?" col='40' row='10'></textarea >
                    </div>
                    <div>
                        <input type='submit' value='Attach'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='button' value='reset'/>
                    </div>
                </form>
            </div>
            
        </section>
    </section>
</body>
</html>