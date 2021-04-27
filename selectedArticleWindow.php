<?php

    session_start();
    
    //get so this page knows what article was clicked
    $article = $_GET["article"];

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
                <h3 id="articleLinkTitleH3"><?php echo $article ?> Donut</h3>
                <h4 id="articlePriceH4"></h4>
                <p id="textP"></p>

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