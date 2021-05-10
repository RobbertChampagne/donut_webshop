<?php
    include 'selectedArticleWindowServer.php';
   
    $articles = $_SESSION['cart'];
    $customerId = $_SESSION['customerId'];

    //AJAX REQUEST FROM shoppingCartScript.js TO UPDATE OBJECTS IN PHP AFTER MINUS,ADD,REMOVE            
    if (isset($_REQUEST['articlesAdjustment'])) {
        
        $articlesFromJs = json_decode($_REQUEST["articlesAdjustment"], false); //(false when request is empty)
        
        foreach($articles as $article){ //php
            foreach($articlesFromJs as $articleFromJs){//from js
                if($article->name == $articleFromJs->name){
                    $article->amount = $articleFromJs->amount; //update article list inside php
                }
            }
        }

        $_SESSION['cart'] = $articles; //update session variable
    }

    //AJAX REQUEST FROM shoppingCartScript.js LOADS TABLE SHOPPING CART ARTICLES            
    $articlesToBeShown = array();

    foreach($articles as $article){

        if($article->getAmount() > 0){

            array_push($articlesToBeShown, $article);       
        }
    } 

    $articlesToBeShown = json_encode($articlesToBeShown); //to json

    // [{"name":"Chocolate","amount":2,"price":4.99},{"name":"Pink","amount":9,"price":3.99},..]
    echo $articlesToBeShown; 


    //WHEN CHECKOUT BUTTON IS PRESSED -> CREATE ORDER -> SAVE IN DB TO SHOW ORDERS IN ACCOUNT PAGE
    if (isset($_POST['checkoutButton'])) {

        //CONNECT TO DB
        $dbPassword = "robbertadmin";
        $dbUserName = "admin_robbert";
        $dbServer = "localhost";
        $dbName = "donutwebshop";

        $connection = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);

        if($connection->connect_errno) //when there is no connection 
        {
            exit("Connection DB failed. Reason: ".$connection->connect_error);
        }

        //UPDATE ORDERS TABLE
        foreach($articles as $article){

            if($article->getAmount() > 0){

                $date = DATE('now');
                $articleName = $article->getName();
                $articleAmount = $article->getAmount();

                $query = "INSERT INTO orders (customer_id, date, product_name, amount) VALUES (?,?,?,?)";
                $result = $connection->prepare($query); //prepares query
                $result->bind_param("ssss", $customerId, $date, $articleName, $articleAmount); //add type to var
                $result->execute(); //uses query on DB  
                $result->store_result(); //save result
                $result->close();     
            }
        } 

        //EMPTY $articles = $_SESSION['cart'] 
        foreach($articles as $article){

            $article->resetAmount();
               
        } 

    }
    

                    
?>