<?php
    session_start();

    //CREATE SESSION['cart'] TO ACT AS A SHOPPING CART
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    
    
    
?>