<?php
include 'products.php'; // Nạp file chứa hàm updateProduct()

// Kiểm tra và cập nhật sản phẩm nếu thông tin đã được gửi
if (isset($_POST['index'], $_POST['name'], $_POST['price'])) {
    $index = $_POST['index'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Gọi hàm cập nhật sản phẩm
    updateProduct($index, $name, $price);

    // Chuyển hướng về index.php sau khi cập nhật
    header('Location: index.php');
    exit();
} else {
    echo "Dữ liệu không hợp lệ!";
}
?>
