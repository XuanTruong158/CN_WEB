<?php
include 'flowers.php'; // Chứa danh sách hoa và các hàm xử lý

$flowers = loadFlowers(); // Tải danh sách hoa từ file
echo '<pre>';
print_r($flowers); // In ra nội dung mảng
echo '</pre>';
include 'header.php'; // Bao gồm header
?>

<div class="container mt-4">
    <h1 class="text-center mb-4">Quản Lý Danh Sách Hoa</h1>

    <!-- Nút Thêm Hoa mở Modal -->
    <button class="btn btn-success mb-4" data-toggle="modal" data-target="#addFlower">Thêm Hoa</button>

    <table class="table table-hover table-bordered">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Tên Hoa</th>
                <th>Mô Tả</th>
                <th>Ảnh</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($flowers)): ?>
                <?php foreach ($flowers as $index => $flower): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($flower['name']); ?></td>
                        <td><?php echo htmlspecialchars($flower['description']); ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($flower['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($flower['name']); ?>" 
                                 class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $index; ?>" class="text-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="delete_handler.php?id=<? echo $index; ?>" class="text-danger" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">Không có hoa để hiển thị.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Modal Thêm Hoa -->
<div class="modal fade" id="addFlower" tabindex="-1" role="dialog" aria-labelledby="addFlowerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFlowerLabel">Thêm Hoa Mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="add_handler.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên Hoa</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô Tả</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh Hoa</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
