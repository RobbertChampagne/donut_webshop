<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="shoppingcartStyle.css" >
    <link rel="stylesheet" type="text/css" href="navbarStyle.css" >
    <script type="text/javascript" src="navbarScript.js"></script>

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
                        <tr>
                            <th>PRODUCT</th>
                            <th>QTY</th>
                            <th>PRICE</th>
                        </tr>

                        <?php 

                            if(isset($_SESSION['cart'])){
                                
                                                                             

                                $doc = new DOMDocument; //creating base to write on                                                                                             

                                foreach( $_SESSION['cart'] as $article){          
                                  
                                    //create 'tr'
                                    $trNode = $doc->createElement('tr');
                                    $trNode->setAttribute('class', 'trShoppingCartTable');
                                    $doc->appendChild($trNode);

                                    for ($x = 0; $x <= 5; $x++){

                                        if($x == 3){
                                            //create and append 'td' + add '-' button
                                            $tdNode = $doc->createElement('td');
                                            $tdNode->setAttribute('class', 'tdShoppingCartTable');
                                            $trNode->appendChild($tdNode);
                                            $buttonNode = $doc->createElement('button', '-');
                                            $buttonNode->setAttribute('class', 'minusButtonShoppingCartTable');
                                            $tdNode->appendChild($buttonNode);

                                        }elseif($x == 4){
                                            //create and append 'td' + add '+' button
                                            $tdNode = $doc->createElement('td');
                                            $tdNode->setAttribute('class', 'tdShoppingCartTable');
                                            $trNode->appendChild($tdNode);
                                            $buttonNode = $doc->createElement('button', '+');
                                            $buttonNode->setAttribute('class', 'addButtonShoppingCartTable');
                                            $tdNode->appendChild($buttonNode);

                                        }elseif($x == 5){
                                            //create and append 'td' + add 'x' button
                                            $tdNode = $doc->createElement('td');
                                            $tdNode->setAttribute('class', 'tdShoppingCartTable');
                                            $trNode->appendChild($tdNode);
                                            $buttonNode = $doc->createElement('button', 'x');
                                            $buttonNode->setAttribute('class', 'deleteButtonShoppingCartTable');
                                            $tdNode->appendChild($buttonNode);

                                        }else{
                                            //create and append 'td'
                                            $tdNode = $doc->createElement('td', $article[$x]);
                                            $tdNode->setAttribute('class', 'tdShoppingCartTable');
                                            $trNode->appendChild($tdNode);
                                        }
                    
                                    }      

                                    echo $doc->saveXML();   
                                    
                                }
                            }
                        
                        ?>
                    
                    </table>

            </div>

            <div id="checkoutContainer">

                <h4 id="subtotalH4">Subtotal ...</h4>

                <form id="checkoutForm" action="">
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