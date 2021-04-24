<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contactStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Contact</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="contactContainer">
            <h1 class="title">Contact us</h1>
            
            <div id="formContainer">
                <form id="form" action="contact.php" method="post">
                    <input type="text" name="name"  placeholder="Name" class="inputfields" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                    <br>
                    <input type="text" name="email" placeholder="Email" class="inputfields" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                    <br>
                    <input type="text" name="topic" placeholder="Topic" class="inputfields" value="<?php echo isset($_POST['topic']) ? $topic : ''; ?>">
                    <br>
                    <textarea type="text" name="message" rows="5" placeholder="Message" id="messageBox" class="inputfields" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                    <br>
                    <button type="submit" id="submitButton">Send</button>
                </form>
            </div>

        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>