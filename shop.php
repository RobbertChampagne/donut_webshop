<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="shopStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

    <title>Shop</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="articleContainer">

            <div class="article">
                <a href="selectedArticleWindow.php"><img class="articleImg" src="images/blackdonut.jpg" width="250px" alt=""></a>
                <a class="articleLinkTitleA" href="selectedArticleWindow.php">Lorem ipsum dolor</a>
                <h4 class="articlePriceH4" >€4,99</h4>
            </div>

            <div class="article">
                <a href="selectedArticleWindow.php"><img class="articleImg" src="images/pinkdonut1.jpg" width="250px" alt=""></a>
                <a class="articleLinkTitleA" href="selectedArticleWindow.php">Lorem ipsum dolor</a>
                <h4 class="articlePriceH4">€3,99</h4>
            </div>

            <div class="article">
                <a  href="selectedArticleWindow.php"><img class="articleImg" src="images/pinkblue.jpg" width="250px" alt=""></a>
                <a class="articleLinkTitleA" href="selectedArticleWindow.php">Lorem ipsum dolor</a>
                <h4 class="articlePriceH4">€4,99</h4>
            </div>

            <div class="article">
                <a  href="selectedArticleWindow.php"><img class="articleImg" src="images/heart1.jpg" width="250px" alt=""></a>
                <a class="articleLinkTitleA" href="selectedArticleWindow.php">Lorem ipsum dolor</a>
                <h4 class="articlePriceH4">€3,99</h4>
            </div>

        </div>

        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>