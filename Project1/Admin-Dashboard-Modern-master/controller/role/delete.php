<?php 
    include('../../model/role_class.php');
    $role = new Role();
    $role -> delete($_GET['role_id']);
    header('Location: ../../view/role.php');
?>