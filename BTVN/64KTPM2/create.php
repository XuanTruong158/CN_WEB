<?php
session_start(); // Bắt đầu session để sử dụng dữ liệu trong session

include 'products.php'; // Bao gồm các hàm liên quan đến sản phẩm

// Kiểm tra nếu có dữ liệu gửi lên từ form
if (isset($_POST['name']) && isset($_POST['price'])) {
    // Lấy dữ liệu sản phẩm
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Thêm sản phẩm vào mảng
    addProduct($name, $price); // Thêm sản phẩm mới vào session

    // Sau khi thêm sản phẩm thành công, chuyển hướng lại trang quản lý sản phẩm
    header('Location: index.php'); // Chuyển hướng lại trang quản lý sản phẩm
    exit; // Dừng script sau khi chuyển hướng
}
?>
