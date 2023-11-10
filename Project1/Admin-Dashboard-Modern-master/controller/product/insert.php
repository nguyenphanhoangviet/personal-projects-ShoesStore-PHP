<?php 
    include('../../model/product_class.php');
    $product = new Product();
    $product -> insert($_POST['product_name'] , $_POST['product_price'] , $_POST['description'] , $_POST['category_id'] , $_POST['img']);
    header('Location: ../../view/product.php');
?>