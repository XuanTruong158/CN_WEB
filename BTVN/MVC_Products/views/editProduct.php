<?php
require_once 'models/productModel.php';


$ID=null;
$product=null;
if (isset($_GET['edit'])) {
    $ID = $_GET['edit'];
    $product = getProductById($ID);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="/CN_WEB/BTVN/MVC_Products/bootstrap/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CN_WEB/BTVN/MVC_Products/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="p-5">
    <h1>Sửa sản phẩm</h1>
    <form method="POST" action="/CN_WEB/BTVN/MVC_Products/controllers/productController.php">
        <input type="hidden" name="action" value="edit">
        <div class="form-group">
            <label for="ID">Mã sản phẩm:</label>
            <input type="text" name="ID" class="form-control" value="<?php echo $product['ID']; ?>" required readonly><br>
        </div>

        <div class="form-group">
            <label for="tenSP">Tên sản phẩm:</label>
            <input type="text" name="tenSP" class="form-control" value="<?php echo $product['tenSP']; ?>" required><br>
        </div>

        <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="number" name="gia" class="form-control" value="<?php echo $product['gia']; ?>" required step="any"><br>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Quay lại</button>
    </form>

    <script src="/CN_WEB/BTVN/MVC_Products/node_modules/jquery/dist/jquery.min.js"></script>

    <script src="/CN_WEB/BTVN/MVC_Products/bootstrap/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>

</html>