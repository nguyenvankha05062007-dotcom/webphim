<?php
// Nhúng file kết nối
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Kiểm tra xem email này đã tồn tại trong CSDL chưa
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $result_check = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($result_check) > 0) {
        // Nếu đã có người dùng email này
        echo "<script>
                alert('Email này đã được đăng ký! Vui lòng sử dụng email khác.');
                window.location.href = 'trangchu.php';
              </script>";
    } else {
        // 2. Nếu email chưa tồn tại, tiến hành lưu (INSERT) vào bảng users
        $sql_insert = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        
        if (mysqli_query($conn, $sql_insert)) {
            echo "<script>
                    alert('Đăng ký tài khoản thành công! Bạn có thể đăng nhập ngay.');
                    window.location.href = 'trangchu.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Có lỗi xảy ra, vui lòng thử lại sau.');
                    window.location.href = 'trangchu.php';
                  </script>";
        }
    }
}
?>