<?php
include 'products.php';

// Kiểm tra và xử lý việc xóa sản phẩm
if (isset($_GET['delete'])) {
    $deleteIndex = $_GET['delete'];
    deleteProduct($deleteIndex); // Xóa sản phẩm theo chỉ mục
}

// Kiểm tra và xử lý việc sửa sản phẩm
$productToEdit = null;
if (isset($_GET['edit'])) {
    $editIndex = $_GET['edit'];
    $productToEdit = $_SESSION['products'][$editIndex]; // Lấy thông tin sản phẩm cần sửa
}

// Lấy danh sách sản phẩm
$products = getProducts();
?>

<?php include 'header.php'; ?>

<div class="container-fluid mt-4 pb-5" style="border-bottom: 5px solid black;">
    <h1 class="mb-4">Quản lý sản phẩm</h1>
    <!-- Nút để mở Modal thêm sản phẩm -->
    <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addProductModal">Thêm mới</button>

    <table class="table">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['name']); ?></td>
                <td><?php echo htmlspecialchars($product['price']); ?> VND</td>
                <td>
                    <!-- Nút sửa, truyền chỉ mục sản phẩm cần sửa -->
                    <a href="?edit=<?php echo $index; ?>" class="text-primary" data-toggle="modal" data-target="#editProductModal">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <!-- Thêm đường dẫn xóa sản phẩm -->
                    <a href="?delete=<?php echo $index; ?>" class="text-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal thêm sản phẩm -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Thêm sản phẩm mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="create.php">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá thành</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal sửa sản phẩm -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Sửa sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="update.php">
                    <div class="form-group">
                        <label for="edit_name">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="edit_name" name="name" value="<?php echo isset($productToEdit['name']) ? htmlspecialchars($productToEdit['name']) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_price">Giá thành</label>
                        <input type="number" class="form-control" id="edit_price" name="price" value="<?php echo isset($productToEdit['price']) ? htmlspecialchars($productToEdit['price']) : ''; ?>" required>
                    </div>
                    <input type="hidden" name="index" value="<?php echo isset($editIndex) ? $editIndex : ''; ?>">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> 
