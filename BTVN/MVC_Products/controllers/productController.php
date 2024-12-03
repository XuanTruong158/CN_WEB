<?php
require_once '../models/productModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'add':
                $tenSP = $_POST['tenSP'];
                $gia = $_POST['gia'];
                $isAdded = addProduct($tenSP, $gia);
                
                if ($isAdded) {
                    header('Location: ../index.php');
                    exit();
                } else {
                    echo "Không thể thêm sản phẩm!";
                }
                break;
                
            case 'edit':
                $id = $_POST['ID'];
                $tenSP = $_POST['tenSP'];
                $gia = $_POST['gia'];
                $isEdited = editProduct($tenSP, $gia, $id);
                
                if ($isEdited) {
                    header('Location: ../index.php');
                    exit();
                } else {
                    echo "Không thể sửa sản phẩm!";
                }
                break;
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $isDeleted = deleteProduct($id);
    if ($isDeleted) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Không thể xóa sản phẩm!";
    }
} else {
    echo "Yêu cầu không hợp lệ!";
}
?>
