<?php
include 'flowers.php';  // Bao gồm các hàm xử lý hoa

// Lấy danh sách hoa từ file
$flowers = loadFlowers();  

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];  // Lấy id từ URL và ép kiểu về số nguyên

    // Lấy tất cả các keys của mảng hoa
    $flowerKeys = array_keys($flowers);

    // Kiểm tra nếu id hợp lệ
    if (in_array($id, $flowerKeys)) {
        // Xóa ảnh nếu tồn tại
        if (file_exists($flowers[$id]['image'])) {
            unlink($flowers[$id]['image']);
        }

        // Xóa hoa khỏi mảng
        unset($flowers[$id]);

        // Cập nhật lại mảng
        $flowers = array_values($flowers); // Đảm bảo chỉ số ID liên tục sau khi xóa

        // Lưu lại danh sách hoa
        saveFlowers($flowers);
    } else {
        echo "Không tìm thấy hoa với ID: $id";
    }
}

?>
