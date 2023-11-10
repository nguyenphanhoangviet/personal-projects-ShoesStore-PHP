<?php include('../../model/category_class.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Update Category</title>
    <!-- Bao gồm các tài nguyên Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        $category = new Category();
        $result = $category->get_by_id($_GET['category_id']);
        $row = mysqli_fetch_assoc($result);
        ?>
        <h2>Cập nhật danh mục</h2>
        <form action="../../controller/category/update.php" method="post">
            <div class="form-group">
                <label for="category_id">ID danh mục:</label>
                <input type="text" class="form-control" name="category_id" id="category_id" value="<?php echo $row['category_id'] ?>" required>
            </div>

            <div class="form-group">
                <label for="category_name">Tên danh mục mới:</label>
                <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $row['category_name'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
        </form>
    </div>

    <!-- Bao gồm các tài nguyên JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>