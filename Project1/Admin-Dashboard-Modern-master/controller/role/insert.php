<?php 
    include('../../model/role_class.php');
    $role = new Role();
    $role -> insert($_POST['role_name']);
    header('Location: ../../view/role.php');
?>