<!DOCTYPE html>
<html>
<head>
    <title>Form Insert Product</title>
    <!-- Bao gồm các tài nguyên Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Thêm sản phẩm mới</h2>
        <form action="insert_product.php" method="post">
            <div class="form-group">
                <label for="product_name">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="product_name" id="product_name" required>
            </div>

            <div class="form-group">
                <label for="product_price">Giá sản phẩm:</label>
                <input type="number" class="form-control" name="product_price" id="product_price" required>
            </div>

            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">ID danh mục:</label>
                <input type="number" class="form-control" name="category_id" id="category_id" required>
            </div>

            <div class="form-group">
                <label for="img">URL hình ảnh:</label>
                <input type="text" class="form-control" name="img" id="img" required>
            </div>

            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>

    <!-- Bao gồm các tài nguyên JavaScript của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
