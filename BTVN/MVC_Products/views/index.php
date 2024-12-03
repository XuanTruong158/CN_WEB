<?php include_once 'includes/header.php'; ?>
<?php
    include_once 'models/productModel.php';
    $pds = getAllProduct();
?>

<div class="container-fluid mt-4 pb-5" style="border-bottom: 5px solid black;">
    <h1 class="mb-4">Quản lý sản phẩm</h1>
    <!-- Nút để mở Modal thêm sản phẩm -->
    <a href="index.php?action=add"><button class="btn btn-success mb-3">Thêm mới</button></a>

    <table class="table">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Sản phẩm</th>
                <th>Giá thành</th>
                <th>Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($pds as $index => $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['ID']); ?></td>
                <td><?php echo htmlspecialchars($product['tenSP']); ?></td>
                <td><?php echo htmlspecialchars($product['gia']); ?> VND</td>
                <td>
                    <a href="index.php?action=edit&edit=<?php echo htmlspecialchars($product['ID']); ?>"
                        class="text-primary">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="controllers/productController.php?action=delete&delete=<?php echo htmlspecialchars($product['ID']); ?>"
                        class="text-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                        <i class="bi bi-trash"></i>
                    </a>


                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once 'includes/footer.php'; ?>