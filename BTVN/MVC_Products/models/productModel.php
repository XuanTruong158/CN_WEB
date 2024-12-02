<?php
    include_once 'database.php'; 
?>

<?php 
    function getAllProduct(){
        $pdo=getDB();
        $sql = "SELECT * FROM products";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<?php
    function addProduct($tenSP, $gia) {
        $pdo = getDB();
        $sql = "INSERT INTO products (tenSP, gia) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tenSP, $gia]); // Trả về true/false
    }
    
?>

<?php
    function editProduct($tenSP, $gia, $id){
        $pdo = getDB();
        $sql = "UPDATE products SET tenSP =?, gia =? WHERE ID =?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$tenSP, $gia, $id]);
    }
?>

<?php
    function deleteProduct($id){
        $pdo = getDB();
        $sql = "DELETE FROM products WHERE ID =?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
?>

<?php

function getProductById($id) {
    $pdo = getDB();
    $stmt = $pdo->prepare("SELECT * FROM products WHERE ID = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

