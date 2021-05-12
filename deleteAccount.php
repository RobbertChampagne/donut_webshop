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
    <title>Delete Account</title>
</head>
<body id=deleteAccountBody>

    <?php include('error.php'); ?> <!--include errors page (shows errors)-->

    <form id="deleteAccountActionsForm" action="deleteAccount.php" method="POST">
        <h1 class="titlesDeletePage">Are you sure you want to delete your account?</h1>
        <h2 class="titlesDeletePage">We sincerely hope you will stay!</h2>
        <button id="backButton"><a id="backButtonA" href="account.php" >It's okay I changed my mind!</a></button>
        <img id="deleteImg" src="images/deleteaccount.JPG" alt="">
        <button type="submit" id="deleteButton" value="deleteButton" name="deleteButton">Delete Account</button>
    </form>  

</body>
</html>