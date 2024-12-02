<?php
include_once '../models/productModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenSP = $_POST['tenSP'];
    $gia = $_POST['gia'];

    $isAdd=addProduct($tenSP, $gia);
    if($isAdd){
        header('Location: index.php');
        exit();
    }
    else{
        echo "Thêm sản phẩm thất bại!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/CN_WEB/BTVN/MVC_Products/bootstrap/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CN_WEB/BTVN/MVC_Products/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="p-5">
    <h1>Thêm sản phẩm mới</h1>
    <form method="POST" action="addProduct.php">
        <div class="form-group">
            <label for="tenSP">Tên sản phẩm:</label>
            <input type="text" name="tenSP" class="form-control" required><br>
        </div>

        <div class="form-group">
            <label for="gia">Giá:</label>
            <input type="number" name="gia" class="form-control" required step="any"><br>
        </div>

        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Quay lại</button>
    </form>

    <script src="/CN_WEB/BTVN/MVC_Products/node_modules/jquery/dist/jquery.min.js"></script>

    <script src="/CN_WEB/BTVN/MVC_Products/bootstrap/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>

</html>