<?php
    session_start();

    //ARTICLES
    class Article {
        public $name;
        public $amount;
        public $price;

        function __construct($name, $price) {
            $this->name = $name;
            $this->amount = 0;
            $this->price = $price;
        }

        function addAmount($count){
            $this->amount += $count; 
        }

        function getAmount(){
            return $this->amount;
        }

        function getName(){
            return $this->name;
        }

        function getPrice(){
            return $this->price;
        }
    }
    
    
    
    //CREATE SESSION['cart'] TO ACT AS A SHOPPING CART 
    //FIRST TIME WHEN ADDING SOMETHING TO CART
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();

        $chocolate = new Article("Chocolate", 4.99);
        $pink = new Article("Pink", 3.99);
        $heart = new Article("Heart", 4.99);
        $blueAndPink = new Article("Blue And Pink", 3.99);

        $_SESSION['cart'] = [$chocolate, $pink, $heart, $blueAndPink];
    
    }

    
    if (isset($_POST['addToCart'])) {
        
        foreach($_SESSION['cart'] as $article){
            if($article->getName() == $_POST['typeOfDonut']){
                $article->addAmount($_POST['amount']);
            }
        }
        
        sleep(1);
        header("location: shop.php");

    }

?>