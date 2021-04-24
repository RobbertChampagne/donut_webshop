<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="selectedArticleWindowStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>
    <script type="text/javascript" src="selectedArticleWindowScript.js"></script>

    <title>Shop</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="articleContainer">

            <div id="article">
                
                <img id="articleImg" src="images/blackdonut.jpg" width="250px" alt="">
                <h3 id="articleLinkTitleH3">Lorem ipsum dolor</h3>
                <h4 id="articlePriceH4" >€4,99</h4>
                <p id="textP">Nam cursus id arcu at maximus. Cras dapibus tempor nibh, nec suscipit metus tincidunt in. Vestibulum tincidunt mi ut eleifend hendrerit.</p>

                <form id="form" action="">
                    <input id="subtract" type="button" value="-">
                    <input id="amount" type="number">
                    <input id="add" type="button" value="+">
                    <br>
                    <input id="addToCart" type="submit" value="ADD TO CART">
                </form>

            </div>
            
        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>