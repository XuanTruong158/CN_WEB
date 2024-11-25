<?php
include 'flowers.php';

$flowers = loadFlowers();

// Lấy ID hoa cần sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if ($id === null || !isset($flowers[$id])) {
    die('Hoa không tồn tại.');
}

$flower = $flowers[$id];
?>

<?php include 'header.php'; ?>

<div class="container mt-4">
    <h1 class="text-center mb-4">Sửa Loài Hoa</h1>
    <form action="edit_handler.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="name">Tên Hoa</label>
            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $flower['name']; ?>">
        </div>
        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" id="description" name="description" required><?php echo $flower['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Ảnh</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <p>Ảnh hiện tại: <img src="<?php echo $flower['image']; ?>" style="width: 100px;"></p>
        </div>
        <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
    </form>
</div>

<?php include 'footer.php'; ?>
