<?php
    include('accountServer.php');

    //IF NOT LOGGED IN YET
    if(!isset($_SESSION['name'])){
        $_SESSION['msg'] = "You must log in first to view this page"; //message not logged in 
        header("location: loginOrRegister.php");
    }


    //LOGGING OUT
    if(isset($_GET['logout'])){
            
        // Unset all of the session variables 
        //(so when logged out you can't go back with the back button)
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        session_destroy();
        header("location: loginOrRegister.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="accountStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Account</title>
</head>
<body>

    <?php include('error.php'); ?> <!--include errors page (shows errors)-->

    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="accountContainer">

            <div id="accountActionsContainer">

                <div id="accountActionsForm">
                    <a id="logoutButton" class="accountActionButtons" href="account.php?logout='1'">Logout</a>
                    <a href="deleteAccount.php" id="deleteAccountButton" class="accountActionButtons">Delete Account</a>
                </div>

            </div>
            

            <div id="orderContainer">
    
                <h3 class="titleH3">Orders:</h3>

                <table id="orderTable">
                    <tr>
                        <th>ID</th>
                        <th>DATE</th>
                        <th>PRODUCT NAME</th>
                        <th>AMOUNT</th>
                    </tr>
                </table>

            </div>

            <div class="accountDetailsContainer">

                <h3 class="titleH3">Account Details:</h3>

                <form action="account.php" method="POST">
                
                    <h5>Username</h5>
                    <input name="name" class="accountInputs" type="text" id="usernameinput" value= <?php echo $_SESSION['name'] ?>  >
                    
                    <h5>Email</h5>
                    <input name= "email" class="accountInputs" type="email" id="emailinput" value= <?php echo $_SESSION['email'] ?>   >
                    
                    <h5>Credit Card Number</h5>
                    <input name= "creditcardnumber" class="accountInputs" type="text" id="creditCardNumberinput" <?php if($_SESSION['creditcardnumber'] != NULL || $_SESSION['creditcardnumber'] != "" ) : ?>  value= <?php echo $_SESSION['creditcardnumber'] ?> <?php else: ?> placeholder="Enter your credit card nr." <?php endif; ?> >
                    
                    <h5>Address</h5>
                    <input name= "address" class="accountInputs" type="text" id="addressinput" <?php if($_SESSION['address'] != NULL  || $_SESSION['address'] != "" ) : ?>  value= <?php echo $_SESSION['address'] ?> <?php else: ?> placeholder="Enter your address" <?php endif; ?>  >

                    <br><br>
                    <input  type="submit" value="Save Changes" class="accountButton" name="saveChangesButton">
                    
                </form>

            </div>
                
            <div class="accountDetailsContainer">

                <h3 class="titleH3">Change Password:</h3>

                <form  action="account.php" method="POST">
                    <h5>Password</h5>
                    <input name= "password" class="accountInputs passwordinput" type="password" placeholder="Enter your new password" autocomplete="new-password" >

                    <h5>Password (repeat)</h5>
                    <input name= "passwordrepeat" class="accountInputs passwordinput" type="password" placeholder="Enter your new password" autocomplete="new-password"  >

                    <br><br>
                    <button type="submit" value="save" class="accountButton" name="savePasswordChangesButton">Save Password Changes</button>
                </form>

            </div>

        </div>

        
        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>