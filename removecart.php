<?php

session_start();
if(!$_GET['id']) {
    header('Location: index.php');
}else{
    
    // unset($_SESSION['product_id'][array_search($_GET['id'], $_SESSION['product_id'])]);
    // header('Location: cart.php');


    $products = array_search($_GET['id'], $_SESSION['product_id']);
    unset($_SESSION['product_id'][$products]);
    header('Location: cart.php');
}






?>