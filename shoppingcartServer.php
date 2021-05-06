<?php
    include 'selectedArticleWindowServer.php';
   
    //AJAX REQUEST FROM shoppingCartScript.js LOADS TABLE SHOPPING CART ARTICLES            
    $articles = $_SESSION['cart'];

    $articlesToBeShown = array();

    foreach($articles as $article){

        if($article->getAmount() > 0){

            array_push($articlesToBeShown, $article);       
        }
    } 
    $articlesToBeShown = json_encode($articlesToBeShown); //to json
    // [{"name":"Chocolate","amount":2,"price":4.99},{"name":"Pink","amount":9,"price":3.99},..]
    echo $articlesToBeShown; 
                    
?>