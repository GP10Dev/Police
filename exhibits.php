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
                <h2>Exhibit Slip.</h2>
            </div>
            <div>
                <form>
                    <!-- <div>Exhibit Slip Details</div> -->
                    <div>
                        <label>Serial Number</label>
                        <input type='text' >
                    </div>
                    <div>
                        <label>Case ref</label>
                        <input type="text" />
                    </div>
                    <div>
                        <label>Date</label>
                        <input type='date' >
                    </div>
                    <div>
                        <label>Checked By</label>
                        <input type='text'  placeholder="use force number">
                    </div>
                    
                
                    <div>
                        <label>Description</label>
                        <textarea cols="10" rows="7"></textarea>
                    </div>
                    <div>
                        <label>Received by</label>
                        <input type='text' placeholder="use force number">
                    </div>
                    <div>
                        <input type='submit' value='Attach'>
                        <!--  return auto set sd Ref and attached station details -->
                        <input type='button' value='reset'/>
                    </div>
                </form>
            </div>
            <div>
                <form>
                    <div class="cls"></div>
                    <div>
                        <h3>Disposal Exihibit</h3>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <label>Date of Disposal</label>
                        <input type="date">
                    </div>
                    <div>
                        <label>Final Disposal</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>NIN</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Disposed by</label>
                        <input type="text" placeholder="use force number" />
                    </div>
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