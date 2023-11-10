<?php include('../../model/role_class.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Role Form</title>
    <!-- Bao gồm Bootstrap CSS từ một nguồn nào đó -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Insert Role</h1>
        <form action="../../controller/role/insert.php" method="post">
            <div class="form-group">
                <label for="role_name">Role Name:</label>
                <input type="text" class="form-control" name="role_name" id="role_name" required>
            </div>
            <button type="submit" class="btn btn-warning">Insert Role</button>
        </form>
    </div>

    <!-- Bao gồm Bootstrap JS và jQuery từ một nguồn nào đó -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
