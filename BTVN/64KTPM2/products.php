<?php
session_start(); // Khởi tạo session nếu chưa có

// Kiểm tra xem session đã có danh sách sản phẩm chưa, nếu chưa thì khởi tạo
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        ['name' => 'Sản phẩm 1', 'price' => 100],
        ['name' => 'Sản phẩm 2', 'price' => 200],
        ['name' => 'Sản phẩm 3', 'price' => 300]
    ];
}

// Hàm để thêm sản phẩm vào mảng
function addProduct($name, $price) {
    // Thêm sản phẩm vào session
    $_SESSION['products'][] = ['name' => $name, 'price' => $price];
}

// Hàm lấy danh sách sản phẩm
function getProducts() {
    return $_SESSION['products'];
}

// Hàm xóa sản phẩm theo chỉ mục
function deleteProduct($index) {
    if (isset($_SESSION['products'][$index])) {
        unset($_SESSION['products'][$index]); // Xóa sản phẩm tại chỉ mục
        $_SESSION['products'] = array_values($_SESSION['products']); // Đặt lại chỉ mục mảng
    }
}

// Hàm sửa sản phẩm
function updateProduct($index, $name, $price) {
    if (isset($_SESSION['products'][$index])) {
        $_SESSION['products'][$index] = ['name' => $name, 'price' => $price];
    }
}
?>
