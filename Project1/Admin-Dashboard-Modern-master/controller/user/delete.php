<?php 
    include('../../model/user_class.php');
    $user = new User();
    $user -> delete($_GET['user_id']);
    header('Location: ../../view/index.php');
?>