<?php
include 'flowers.php'; // Chứa các hàm xử lý hoa
$flowers = loadFlowers(); // Tải danh sách hoa từ file

include 'header.php'; // Bao gồm header
?>

<div class="container mt-4">
    <h1 class="text-center mb-4">Danh Sách Các Loài Hoa</h1>
    <div class="row">
        <?php foreach ($flowers as $flower): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?php echo htmlspecialchars($flower['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($flower['name']); ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($flower['name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($flower['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
