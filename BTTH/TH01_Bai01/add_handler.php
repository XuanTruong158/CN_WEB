<?php
include 'flowers.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imagePath = 'images/' . basename($_FILES['image']['name']);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
        $flowers = loadFlowers();
        $flowers[] = [
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
        ];
        saveFlowers($flowers); 
        header('Location: show.php'); 
        exit;
    } else {
        echo 'Lỗi khi tải ảnh lên.';
    }
}
?>
