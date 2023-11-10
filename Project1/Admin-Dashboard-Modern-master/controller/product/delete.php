<?php 
    include('../../model/product_class.php');
    $product = new Product();
    $product -> delete($_GET['product_id']);
    header('Location: ../../view/product.php');
?>