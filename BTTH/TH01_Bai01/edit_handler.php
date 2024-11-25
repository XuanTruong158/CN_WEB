<?php
include 'flowers.php';

$flowers = loadFlowers();

// Xử lý sửa hoa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imagePath = $flowers[$id]['image']; // Giữ nguyên ảnh cũ nếu không thay đổi

    // Nếu có ảnh mới, xử lý upload
    if (!empty($_FILES['image']['name'])) {
        $newImagePath = 'images/' . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $newImagePath)) {
            $imagePath = $newImagePath;
        } else {
            die('Lỗi khi tải lên ảnh mới.');
        }
    }

    // Cập nhật hoa
    $flowers[$id] = [
        'name' => $name,
        'description' => $description,
        'image' => $imagePath,
    ];

    saveFlowers($flowers);
    header('Location: show.php');
    exit;
}
?>
