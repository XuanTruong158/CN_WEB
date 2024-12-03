<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'home';


switch ($action) {
    case 'home':
        include 'views/index.php'; 
        break;
    case 'edit':
        include 'views/editProduct.php';
        break;
    case 'add':
        include 'views/addProduct.php';
        break;
    case 'delete':
        include 'views/deleteProduct.php';
        break;
    default:
        echo "Lỗi";
        break;
}
?>
