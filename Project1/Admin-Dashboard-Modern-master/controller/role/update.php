<?php 
    include('../../model/role_class.php');
    $role = new Role();
    $role -> update($_POST['role_id'], $_POST['role_name']);
    header('Location: ../../view/role.php');
?>