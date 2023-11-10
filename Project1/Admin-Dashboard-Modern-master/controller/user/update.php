<?php 
    include('../../model/user_class.php');
    $user = new User();
    $user -> update($_POST['user_id'] ,$_POST['user_name'] , $_POST['user_email'] , $_POST['user_pass'] , $_POST['user_phone'], $_POST['role_id']);
    header('Location: ../../view/index.php');
?>