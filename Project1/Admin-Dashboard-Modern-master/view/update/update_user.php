<?php include('../../model/user_class.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php 
            if(isset($_GET['user_id'])){
                $user = new User();
                $result = $user->get_by_id($_GET['user_id']);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                } else {
                    echo "Người dùng không được tìm thấy.";
                }
            } else {
                echo "Không có ID người dùng nào được cung cấp trong URL.";
            }
        
        
    ?>
    <h2>Update User Information</h2>
    <form action="../../controller/user/update.php" method="post">
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="number" class="form-control" id="user_id" name="user_id" required value="<?php echo $row['user_id'] ?>">
        </div>
        <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required value="<?php echo $row['user_name'] ?>">
        </div>
        <div class="form-group">
            <label for="user_pass">Password:</label>
            <input type="password" class="form-control" id="user_pass" name="user_pass" required value="<?php echo $row['user_pass'] ?>">
        </div>
        <div class="form-group">
            <label for="user_phone">Phone:</label>
            <input type="tel" class="form-control" id="user_phone" name="user_phone" value="<?php echo $row['user_phone'] ?>">
        </div>
        <div class="form-group">
            <label for="role_id">Role ID:</label>
            <input type="number" class="form-control" id="role_id" name="role_id" required value="<?php echo $row['role_id'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>

</body>
</html>
