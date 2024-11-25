<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Danh sách tài khoản từ file CSV</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Thành phố</th>
                    <th>Email</th>
                    <th>Khóa học</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Đường dẫn tới file CSV
                $filename = "KTPM2.csv";

                // Kiểm tra file có tồn tại hay không
                if (file_exists($filename)) {
                    // Mở file CSV
                    if (($handle = fopen($filename, "r")) !== FALSE) {
                        // Đọc dòng đầu tiên (header)
                        $headers = fgetcsv($handle, 1000, ",");

                        // Đọc dữ liệu từng dòng
                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            echo "<tr>";
                            foreach ($data as $cell) {
                                echo "<td>" . htmlspecialchars($cell) . "</td>";
                            }
                            echo "</tr>";
                        }

                        fclose($handle);
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>Không thể mở file CSV.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>File CSV không tồn tại.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
