<!DOCTYPE html>
<html>
<head>
    <title>Form Insert Category</title>
    <!-- Bao gồm các tài nguyên Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Thêm danh mục mới</h2>
        <form action="../../controller/category/insert.php" method="post">
            <div class="form-group">
                <label for="category_name">Tên danh mục:</label>
                <input type="text" class="form-control" name="category_name" id="category_name" required>
            </div>

            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        </form>
    </div>

    <!-- Bao gồm các tài nguyên JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
