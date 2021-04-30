<?php
    session_start();

    //CREATE SESSION['cart'] TO ACT AS A SHOPPING CART
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    //ARTICLES
    class Article {
        public $name;
        public $amount;
        public $price;

        function __construct($name, $amount, $price) {
            $this->name = $name;
            $this->amount = $amount;
            $this->price = $price;
        }

        function addAmount($amount){
            $this->amount += $amount; 
        }
    }

    $chocolate = new Article("Chocolate", 0, 4.99);
    $pink = new Article("Pink", 0, 3.99);
    $heart = new Article("Heart", 0, 4.99);
    $blueAndPink = new Article("Blue And Pink", 0, 3.99);

    if (isset($_POST['addToCart'])) {
        
        //CHOSEN ARTICLE
        $values = array($_POST['typeOfDonut'], $_POST['amount']);

        //ADD TO CART ARRAY
        array_push($_SESSION['cart'], $values);
        
        sleep(1);
        header("location: shop.php");

    }

?>