<?php include('../../model/user_class.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>User Registration Form</h2>
    <form action="../../controller/user/insert.php" method="post">
        <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>
        <div class="form-group">
            <label for="user_pass">Password:</label>
            <input type="password" class="form-control" id="user_pass" name="user_pass" required>
        </div>
        <div class="form-group">
            <label for="user_email">Email:</label>
            <input type="email" class="form-control" id="user_email" name="user_email" required>
        </div>
        <div class="form-group">
            <label for="user_phone">Phone:</label>
            <input type="tel" class="form-control" id="user_phone" name="user_phone">
        </div>
        <div class="form-group">
            <label for="role_id">Role ID:</label>
            <input type="number" class="form-control" id="role_id" name="role_id" required>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

</body>
</html>
