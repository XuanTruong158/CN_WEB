<?php
include_once '../models/productModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        if ($action == 'add') {
            $tenSP = $_POST['tenSP'];
            $gia = $_POST['gia'];
            addProduct($tenSP, $gia);
        } else if ($action == 'edit') {
            $id = $_POST['ID'];
            $tenSP = $_POST['tenSP'];
            $gia = $_POST['gia'];
            editProduct($tenDT, $gia, $id);
        } else if ($action == 'delete') {
            $id = $_POST['id'];
            deleteProduct($id);
        }
    }
}
?>
