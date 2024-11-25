<?php
// Đọc dữ liệu từ file
$filename = "questions.txt";
$questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Kiểm tra nếu file không tồn tại hoặc không có dữ liệu
if (!$questions || empty($questions)) {
    die("Không thể đọc tệp câu hỏi hoặc tệp rỗng.");
}

// Tách đáp án
$answers = [];
foreach ($questions as $line) {
    if (strpos($line, "Đáp án:") !== false) {
        $answers[] = trim(substr($line, strpos($line, ":") + 1));
    }
}

// Tính điểm
$score = 0;
$totalQuestions = count($answers);
foreach ($_POST as $key => $userAnswer) {
    $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h1>Bạn trả lời đúng <strong><?php echo $score; ?></strong>/<?php echo $totalQuestions; ?> câu.</h1>
        </div>
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Làm lại</a>
        </div>
    </div>
</body>
</html>
