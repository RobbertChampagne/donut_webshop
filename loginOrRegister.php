<?php include('server.php') ?> <!--include PHP page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginOrRegisterStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Login Or Register</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="loginRegisterTopContainer">

            <h4 class="title">Login / Register</h4>
            
            <?php include('error.php'); ?> <!--include errors page (shows errors)-->


            <div class="loginOrRegisterContainer">
                <h3 class="title">Login</h3>

                <form action="loginOrRegister.php" method="post"  >
                    
                    <h5>Email</h5>
                    <input name="email" class="loginregisterinputs" type="text" id="emailinput" placeholder="Enter your email"  required >

                    <h5>Password</h5>
                    <input name="password" class="loginregisterinputs" type="password" id="passwordinput" placeholder="Enter your password" autocomplete="new-password" required  >
                    
                    <br><br>
                    <button type="submit"  class="loginregisterbuttons" name="loginbutton">Login</button>

                </form>
            </div>

            <div class="loginOrRegisterContainer">
                <h3 class="title">Register</h3>

                <form action="loginOrRegister.php" method="post">

                    <h5>Username</h5>
                    <input name="name" class="loginregisterinputs" type="text" id="usernameinput" placeholder="Enter your username"  required >
                    
                    <h5>Email</h5>
                    <input name= "email" class="loginregisterinputs" type="email" id="emailinput" placeholder="Enter your email" required >
                    
                    <h5>Password</h5>
                    <input name= "password" class="loginregisterinputs" type="password" id="passwordinput" placeholder="Enter your password" autocomplete="new-password" required >

                    <h5>Password (repeat)</h5>
                    <input name= "passwordrepeat" class="loginregisterinputs" type="password" id="passwordinput" placeholder="Enter your password" required >
                    
                    <br><br>
                    <button type="submit" class="loginregisterbuttons" name="registerbutton">Register</button>
                    
                </form>
            </div>

        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>