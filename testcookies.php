<?php
/*
    -------------------------------
    Cookies trong PHP
    -------------------------------
    - Dung lượng tối đa: 4KB
    - Lưu thông tin người dùng trên trình duyệt (máy client)
    - Cấu trúc: key => value + thời gian hết hạn + tên miền + đường dẫn
    -------------------------------
    Mục đích:
    + Quản lý session đăng nhập
    + Theo dõi trải nghiệm người dùng
    + Lưu tuỳ chọn cá nhân
    -------------------------------
    Hàm dùng:
    setcookie(name, value, expires, path, domain, secure, httponly)
    => Dùng để tạo cookie
    Lấy cookie: $_COOKIE['name']
*/

// -------------------
// Cách viết hiện đại
// -------------------
setcookie(
    'username',               // tên cookie
    'Nguyễn Văn A',           // giá trị cookie
    [
        'expires' => time() + 3600,   // hết hạn sau 1 giờ
        'path' => '/myweb',           // đường dẫn áp dụng
    ]
);

// Kiểm tra và hiển thị cookie
if (isset($_COOKIE['username'])) {
    echo "Xin chào bạn, " . htmlspecialchars($_COOKIE['username']);
} else {
    echo "Không có cookies!";
}

echo "<hr>";

// -------------------
// Xóa cookie
// -------------------
setcookie(
    'username',               // tên cookie
    '',                       // giá trị rỗng
    time() - 3600,            // thời gian quá khứ → xóa
    '/myweb'                  // đúng đường dẫn cũ
);

// Kiểm tra sau khi xóa
if (isset($_COOKIE['username'])) {
    echo "Xin chào bạn, " . htmlspecialchars($_COOKIE['username']);
} else {
    echo "Cookie đã bị xóa!";
}
?>
