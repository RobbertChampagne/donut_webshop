<?php
    include 'selectedArticleWindowServer.php';

    //session_start(); //starts in included file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="shoppingcartStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>
    <script type="text/javascript" src="shoppingCartScript.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title>Shoppingcart</title>
</head>
<body>
    
    <div id="container">
        
        <div id="navbarContainer">
            <?php include "navbar.php"; ?>
        </div>

        <div id="shoppingContainer">

            <div id="productContainer">
        
                    <h3 class="titleH3">SHOPPING CART</h3>

                    <table id="productTable">
                        <!--<tr>
                            <th>PRODUCT</th>
                            <th>QTY</th>
                            <th>PRICE</th>
                        </tr>-->
                    </table>

            </div>

            <div id="checkoutContainer">

                <h4 id="subtotalH4">Subtotal </h4>

                <form id="checkoutForm" action="shoppingcartServer.php" method="POST">
                    <button type="submit" value="checkout" id="checkoutButton" name="checkoutButton">CHECKOUT</button>
                </form>

            </div>

        </div>


        <div id="socialmediaNavbarContainer">
            <?php include "socialmedianavbar.php"; ?>
        </div>
          
    </div>

</body>
</html>