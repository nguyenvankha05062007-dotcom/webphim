<?php
// Bắt đầu session để lưu trạng thái đăng nhập
session_start();

// Nhúng file kết nối cơ sở dữ liệu
include 'connect.php';

// Kiểm tra xem người dùng đã bấm nút Submit (gửi POST) chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form gửi sang thông qua thuộc tính 'name'
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Câu lệnh SQL để tìm user trong CSDL
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có tìm thấy tài khoản không (có dòng nào khớp không)
    if (mysqli_num_rows($result) > 0) {
        // ĐĂNG NHẬP THÀNH CÔNG
        $_SESSION['user_email'] = $email; 
        
        // Hiện thông báo và chuyển hướng quay lại trang chủ
        echo "<script>
                alert('Đăng nhập thành công!');
                window.location.href = 'trangchu.php';
              </script>";
    } else {
        // ĐĂNG NHẬP THẤT BẠI
        // Hiện thông báo lỗi và chuyển hướng quay lại trang chủ
        echo "<script>
                alert('Sai email hoặc mật khẩu! Vui lòng thử lại.');
                window.location.href = 'trangchu.php';
              </script>";
    }
}
?>