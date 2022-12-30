<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UPF APP</title>

        <link href="./static/img/policeLogo.jpeg" rel="icon" type="image/png" />

        <link rel="stylesheet" href="./static/css/all.css" />
        <link rel="stylesheet" href="./static/css/login.css" />
    </head>
    <body>
        <section id="main">
            <div id="orglogo">
                <a href="./">
                    <img src="./static/img/uganda-police-logo.png" alt="uganda police logo transparent" />
                </a>
            </div>
            <div id="orgcred">
                <form method="post" action="./server/handelers/verifylogin.php">
                    <div>
                        <p id="title">Welcome back!</p>
                    </div>
                    <div>
                        <label for="user">Username</label>
                        <input name="user" type="email" placeholder="Username" required />
                    </div>
                    <div>
                        <label for="passwd">Password</label>
                        <input name="passwd" type="password" placeholder="Password" required />
                    </div>
                    <div>
                        <input name="opt" type="radio" value="false"/>
                        <label for="cookie">Remember me</label>
                    </div>
                    <div>
                        <input name="login" type="submit" value="Log in" />
                    </div>
                </form>
                <hr>
                <div class="links">
                    <p onclick="changeWindow('forgotkey')">forgot password?</p>
                    <p><span>View Policy</span> | <span>need help?</span></p>
                    <!-- <p>&nbsp;</p> -->
                    <p>Police Act</p>
                </div>
            </div>
            <div id="forgotkey">
                <section>
                    <div>
                        <p>Forgot Password</p>
                    </div>
                    <div class="cls"></div>
                    <div>
                        <p><span class="note">NOTE:</span>The log in and signup is only for police staff members.</p>
                        <p>Before calling for assistance, please remember that;</p>
                        <ul>
                            <li>your username is the force email.</li>
                            <li>First time login will have your force numbeer as the default password.</li>
                        </ul>
                        <p>If your forgot your password, please contact your station OC.</p>
                    </div>
                    <hr>
                    <div class="links">
                        <p onclick="changeWindow('orgcred')">Log in</p>
                        <p><span>View Policy</span> | <span>need help?</span></p>
                        <!-- <p>&nbsp;</p> -->
                        <p>Police Act</p>
                    </div>
                </section>
            </div>
            <span class="cls"></span>
        </section>


        <script src="./static/js/login.js" ></script>
    </body>
</html>