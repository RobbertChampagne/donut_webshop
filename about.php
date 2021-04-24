<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="aboutStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>About</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        
        <div class="imgTitleDivContainer">

            <div id="titleDivContainer">
                <h3 class="aboutTitleH3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <p class="textP">Nam cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in. 
                    Vestibulum tincidunt mi ut eleifend hendrerit. Ut in ex et mi laoreet tincidunt. 
                    Integer ut dapibus neque. Donec pharetra luctus elit, at blandit libero feugiat eu.</p>
            </div>

            <div id="emptySpace">&nbsp;</div>

            <img id="aboutImg" src="images/donuttruck.jpg" width=200px alt="">

        </div>

            <br>
            <br>

        <div id="imgTitleDivContainerSecond" class="imgTitleDivContainer">

            <img id="aboutImg" src="images/purpledonut1.jfif" width=200px alt="">

            <div id="emptySpace">&nbsp;</div>

            <div id="titleDivContainer">
                <h3 class="aboutTitleH3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <p class="textP">Nam cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in. 
                        Vestibulum tincidunt mi ut eleifend hendrerit. Ut in ex et mi laoreet tincidunt. 
                        Integer ut dapibus neque. Donec pharetra luctus elit, at blandit libero feugiat eu.</p>
            </div>

        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>