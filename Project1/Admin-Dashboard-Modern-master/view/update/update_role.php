<?php include('../../model/role_class.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Role Form</title>
    <!-- Bao gồm Bootstrap CSS từ một nguồn nào đó -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
            $role = new Role();
            $result = $role->get_by_id($_GET['role_id']);
            $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Update Role</h1>
        <form action="../../controller/role/update.php" method="post">
            <div class="form-group">
                <label for="role_id">Role ID:</label>
                <input type="text" class="form-control" name="role_id" id="role_id" required value="<?php echo $row['role_id'] ?>">
            </div>
            <div class="form-group">
                <label for="role_name">Role Name:</label>
                <input type="text" class="form-control" name="role_name" id="role_name" required value="<?php echo $row['role_name'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Role</button>
        </form>
    </div>

    <!-- Bao gồm Bootstrap JS và jQuery từ một nguồn nào đó -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
