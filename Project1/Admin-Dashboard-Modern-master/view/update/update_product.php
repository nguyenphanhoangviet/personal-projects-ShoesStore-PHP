<?php include('../../model/product_class.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Update Product</title>
    <!-- Bao gồm các tài nguyên Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        $product = new Product();
        $result = $product->get_by_id($_GET['product_id']);
        $row = mysqli_fetch_assoc($result);
        ?>
        <h2>Cập nhật sản phẩm</h2>
        <form action="../../controller/product/update.php" method="post">
            <div class="form-group">
                <label for="product_id">ID sản phẩm:</label>
                <input type="number" class="form-control" name="product_id" id="product_id" value="<?php echo $row['product_id'] ?>" required>
            </div>

            <div class="form-group">
                <label for="product_name">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $row['product_name']?>" required>
            </div>

            <div class="form-group">
                <label for="product_price">Giá sản phẩm:</label>
                <input type="number" class="form-control" name="product_price" id="product_price" value="<?php echo $row['product_price'] ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea class="form-control" name="description" id="description" $value="<?php echo $row['description']?>" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">ID danh mục:</label>
                <input type="number" class="form-control" name="category_id" id="category_id" value="<?php echo $row['category_id'] ?>" required>
            </div>

            <div class="form-group">
                <label for="img">URL hình ảnh:</label>
                <input type="text" class="form-control" name="img" id="img" value="<?php echo $row['img']?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </form>
    </div>

    <!-- Bao gồm các tài nguyên JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>