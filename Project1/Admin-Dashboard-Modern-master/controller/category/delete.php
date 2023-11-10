<?php 
    include('../../model/category_class.php');
    $category = new Category();
    $category -> delete($_GET['category_id']);
    header('Location: ../../view/category.php');
?>