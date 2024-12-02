<?php
    include_once '../models/productModel.php';

    if (isset($_GET['delete'])){
        $ID = $_GET['delete'];
        $isDelete = deleteProduct($ID);
        if ($isDelete){
            header('Location: index.php');
            exit();
        }
        else{
            echo "Xoá không thành công";
        }
    }
?>