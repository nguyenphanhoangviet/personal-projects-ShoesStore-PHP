<?php 
    include('../../model/category_class.php');
    $category = new Category();
    $category -> insert($_POST['category_name']);
    header('Location: ../../view/category.php');
?>