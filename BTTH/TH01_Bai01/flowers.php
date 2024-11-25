<?php
    $defaultFlowers = [
        ['name' => 'Hoa dạ yến thảo', 'description' => 'Hoa 1', 'image' => 'images/hoa_da_yen_thao.webp'],
        ['name' => 'Hoa đồng tiền', 'description' => 'Hoa 2', 'image' => 'images/hoa_dong_tien.webp'],
        ['name' => 'Hoa giấy', 'description' => 'Hoa 3', 'image' => 'images/hoa_giay.webp'],
        ['name' => 'Hoa thanh tú', 'description' => 'Hoa 4', 'image' => 'images/hoa_thanh_tu.webp'],
        ['name' => 'Hoa đèn lồng', 'description' => 'Hoa 5', 'image' => 'images/hoa_den_long.webp'],
        ['name' => 'Hoa cẩm chướng', 'description' => 'Hoa 6', 'image' => 'images/hoa_cam_chuong.webp'],
        ['name' => 'Hoa huỳnh anh', 'description' => 'Hoa 7', 'image' => 'images/hoa_huynh_anh.webp'],
        ['name' => 'Hoa Păng-xê', 'description' => 'Hoa 8', 'image' => 'images/hoa_pang_xe.webp'],
        ['name' => 'Hoa sen', 'description' => 'Hoa 9', 'image' => 'images/hoa_sen.webp'],
        ['name' => 'Hoa dừa cạn', 'description' => 'Hoa 10', 'image' => 'images/hoa_dua_can.webp'],
        ['name' => 'Hoa sử quân tử', 'description' => 'Hoa 11', 'image' => 'images/hoa_su_quan_tu.webp'],
        ['name' => 'Cúc lá nho', 'description' => 'Hoa 12', 'image' => 'images/cuc_la_nho.jpg'],
        ['name' => 'Cẩm tú cầu', 'description' => 'Hoa 13', 'image' => 'images/cam_tu_cau.webp'],
        ['name' => 'Hoa cúc dại', 'description' => 'Hoa 14', 'image' => 'images/hoa_cuc_dai.webp'],
    ];

    
    // Hàm tải danh sách hoa
// Hàm tải danh sách hoa
function loadFlowers() {
    global $defaultFlowers;
    // Kiểm tra xem file flowers_data.php có tồn tại và có thể include được không
    return file_exists('flowers_data.php') ? include 'flowers_data.php' : $defaultFlowers;
}

// Hàm lưu danh sách hoa
function saveFlowers($flowers) {
    file_put_contents('flowers_data.php', '<?php return ' . var_export($flowers, true) . ';');
}



?>