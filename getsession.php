<?php
// session có giá trị từ lúc bắt đầu đến khi đóng trình duyệt
// Bắt đầu session
session_start();

// Đặt giá trị cho session (nếu cần)
// $_SESSION['TEN_BIEN'] = 'VALUE';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Test GET Session</title>
</head>
<body>
    <?php
        if (isset($_SESSION['subject'])) {
            echo "Subject: " . $_SESSION['subject'] . "<br>";
        }

        if (isset($_SESSION['grade'])) {
            echo "Grade: " . $_SESSION['grade'] . "<br>";
        }
    ?>
</body>
</html>
