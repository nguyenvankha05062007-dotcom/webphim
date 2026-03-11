<?php
include "connect.php";

$sql = "SELECT * FROM movie WHERE loai='decu'";
$result = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM movie WHERE loai='capnhat'";
$result2 = mysqli_query($conn,$sql2);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>phim-hay</title>
</head>
<body>
    <div class="navbar">
      <div class="logo">
        <h1>PHIMHAY</h1>
        <p>Phim Online</p>
      </div>
      <div class="menu">
        <a href="#" class="active">TRANG CHỦ</a>

        <div class="dropdown">
          <a href="#">THỂ LOẠI</a>
          <div class="dropdown-content">
            <a href="cotrang.php">CỔ TRANG</a>
            <a href="#">HÀNH ĐỘNG</a>
            <a href="#">TÂM LÝ</a>
            <a href="#">GIA ĐÌNH</a>
            <a href="#">HÀI HƯỚC</a>
            <a href="#">KINH DỊ</a>
            <a href="#">HOẠT HÌNH</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#">QUỐC GIA</a>
          <div class="dropdown-content">
            <a href="#">VIỆT NAM</a>
            <a href="#">TRUNG QUỐC</a>
            <a href="#">HÀN QUỐC</a>
            <a href="#">NHẬT BẢN</a>
            <a href="#">MỸ</a>
            <a href="#">THÁI LAN</a>
          </div>
        </div>
        <a href="phimchieurap.php">PHIM CHIẾU RẠP</a>
        <a href="phimbo.php">PHIM BỘ</a>
        <a href="phimle.php">PHIM LẺ</a>
      </div>
      <div class="right">
        <div class="search">
          <input type="text" placeholder="Nhập tên phim..." />
          <button>🔍︎</button>
        </div>
      </div>
      <div class="user">
        <a href="#" id="btn-mo-form" class="btn-login-rophim">Đăng Nhập</a>
        <a href="#" id="btn-mo-form-dang-ky">Đăng ký</a>
      </div>
    </div>
    <div class="main-container">
      <div class="main-content">
        <div class="content">
          <div class="movie">
            <h2>PHIM ĐỀ CỬ</h2>
          </div>
          <div class="list-movie">
            
<?php
while($row = mysqli_fetch_assoc($result)){
?>

<a href="chitiet.php?id=<?php echo $row['id']; ?>" class="movie-link">
<div class="movie-card">

  <span class="label-top">Vietsub</span>
    <span class="label-trending">Trending</span>

  <div class="movie-img">
    <img src="img/<?php echo $row['hinhanh']; ?>" alt="">
    <div class="btn-play">▶</div>
  </div>

  <p><?php echo $row['tenphim']; ?></p>

</div>
</a>

<?php
}
?>
</div>
          <div class="movie">
            <h2>PHIM MỚI CẬP NHẬT</h2>
          </div>
           <div class="list-movie">
<?php
while($row = mysqli_fetch_assoc($result2)){
?>

<a href="chitiet.php?id=<?php echo $row['id']; ?>" class="movie-link">
<div class="movie-card">

  <span class="label-top">Vietsub</span>
    
  <div class="movie-img">
    <img src="img/<?php echo $row['hinhanh']; ?>" alt="">
    <div class="btn-play">▶</div>
  </div>

  <p><?php echo $row['tenphim']; ?></p>

</div>
</a>

<?php
}
?>

          <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie7.png" alt="phim7" />
                <div class="btn-play">▶</div>
              </div>
              <p>MƯỜI</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie8.webp" alt="phim8" />
                <div class="btn-play">▶</div>
              </div>
              <p>NĂM MƯỜI</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie9.webp" alt="phim9" />
                <div class="btn-play">▶</div>
              </div>
              <p>ĐẾM NGÀY XA MẸ</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie10.jpg" alt="phim10" />
                <div class="btn-play">▶</div>
              </div>
              <p>CÔ HẦU GÁI</p>
            </div>
          </div>
          <div class="list-movie">
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie11.webp" alt="phim11" />
                <div class="btn-play">▶</div>
              </div>
              <p>BÉ GHỆ MA CƯNG</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie12.webp" alt="phim12" />
                <div class="btn-play">▶</div>
              </div>
              <p>CHA TÔI LÀ GĂNG TƠ</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie13.webp" alt="phim13" />
                <div class="btn-play">▶</div>
              </div>
              <p>MAI LAN PHƯỢNG</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie14.jpg" alt="phim14" />
                <div class="btn-play">▶</div>
              </div>
              <p>MÓN QUÀ CỦA KLUAY</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie15.jpg" alt="phim15" />
                <div class="btn-play">▶</div>
              </div>
              <p>BẪY TÂM</p>
            </div>
          </div>

          <div class="movie">
            <h2>PHIM CHIẾU RẠP MỚI</h2>
          </div>
          <div class="list-movie">
           
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie16.webp" alt="phim16" />
                <div class="btn-play">▶</div>
              </div>
              <p>THỎ ƠI</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie17.webp" alt="phim17" />
                <div class="btn-play">▶</div>
              </div>
              <p>KẺ ĂN HỒN</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movi18.jpg" alt="phim18" />
                <div class="btn-play">▶</div>
              </div>
              <p>MAI</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie19.webp" alt="phim19" />
                <div class="btn-play">▶</div>
              </div>
              <p>ĐỘNG QUỶ</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie20.jpg" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>ĐỊA ĐẠO</p>
            </div>
          </div>
          <div class="movie">
            <h2>PHIM HOẠT HÌNH</h2>
          </div>
          <div class="list-movie">
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie26.jpg" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>ONE PIECE</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie27.jpg" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>THÁM TỬ LỪNG DANH CONAN</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie28.jpg" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>DORAEMON</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie29.jpg" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>NARUTO</p>
            </div>
            <div class="movie-card">
              <span class="label-top">Vietsub</span>
              <div class="movie-img">
                <img src="./img/movie30.webp" alt="phim20" />
                <div class="btn-play">▶</div>
              </div>
              <p>SIN CẬU BÉ BÚT CHÌ</p>
            </div>
          </div>
        </div>
        </div>
      <div class="sidebar">
        <h2 class="sidebar-title">TRENDING</h2>
        <div class="trending-tabs">
          <button class="active">Ngày</button>
          <button>Tuần</button>
          <button>Tháng</button>
        </div>
        <div class="trending-list">
          <div class="trending-item">
            <span class="rank top-rank">1</span>
            <div class="trending-info">
              <h4>Đảo Hải Tặc</h4>
              <p>36563624 lượt quan tâm</p>
            </div>
          </div>
          <div class="trending-item">
            <span class="rank top-rank">2</span>
            <div class="trending-info">
              <h4>Thám Tử Lừng Danh Conan</h4>
              <p>13743773 lượt quan tâm</p>
            </div>
          </div>
          <div class="trending-item">
            <span class="rank top-rank">3</span>
            <div class="trending-info">
              <h4>Chân Mệnh Thiên Tử</h4>
              <p>2738824 lượt quan tâm</p>
            </div>
          </div>
          <div class="trending-item">
            <span class="rank top-rank">4</span>
            <div class="trending-info">
              <h4>Đếm ngày xa mẹ</h4>
              <p>622865 lượt quan tâm</p>
            </div>
          </div>
          <div class="trending-item">
            <span class="rank top-rank">5</span>
            <div class="trending-info">
              <h4>Cô hầu gái</h4>
              <p>54656 lượt quan tâm</p>
            </div>
          </div>
        </div>
        <h2 class="sidebar-title">BẢNG XẾP HẠNG</h2>
        <div class="rank-item">
          <img src="./img/movie27.jpg" class="rank-img" alt="hinh27" />
          <div class="rank-info">
            <h4>Thám Tử Lừng Danh Conan</h4>
            <p>Detective Conan (1996)</p>
            <p class="episode">Tập 1191</p>
            <div class="star">★★★★★</div>
          </div>
        </div>
        <div class="rank-item">
          <img src="./img/movie16.webp" class="rank-img" alt="hinh16" />
          <div class="rank-info">
            <h4>Thỏ Ơi</h4>
            <p>Phim tết 2026</p>
            <p class="episode"></p>
            <div class="star">★★★★★</div>
          </div>
        </div>
        <div class="rank-item">
          <img src="./img/movie30.webp" class="rank-img" alt="hinh16" />
          <div class="rank-info">
            <h4>Sin Cậu Bé Bút Chì</h4>
            <p></p>
            <p class="episode">Tập 1000</p>
            <div class="star">★★★★★</div>
          </div>
        </div>
        <div class="rank-item">
          <img src="./img/movie26.jpg" class="rank-img" alt="hinh16" />
          <div class="rank-info">
            <h4>Đảo Hải Tặc</h4>
            <p>One Piece (1999)</p>
            <p class="episode">Tập 1111</p>
            <div class="star">★★★★★</div>
          </div>
        </div>
        </div>
    </div>

     <div id="khung-dang-nhap" class="modal-overlay">
      <div class="modal-container auth-container relative-box">
        <button class="close-btn" id="btn-dong-form">
          <i class="fas fa-times"></i>
        </button>
        <p id="error-msg" class="error-text"></p>
        <form id="authForm" action="login.php" method="POST">
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Nhập email của bạn..."/>
          </div>

          <div class="input-group">
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu..."/>
          </div>

          <button type="submit" class="auth-btn btn-dang-nhap-chuan">Đăng Nhập</button>

          <div class="auth-links">
            <p>
              Chưa có tài khoản?
              <a href="#" id="link-dang-ky-ngay" class="link-highlight">Đăng ký ngay</a>
            </p>
            <a href="#" class="forgot-password">Quên mật khẩu?</a>
          </div>
        </form>
      </div>
    </div>

    <div id="khung-dang-ky" class="modal-overlay">
  <div class="modal-container auth-container relative-box">
    <button class="close-btn" id="btn-dong-form-dang-ky">
      <i class="fas fa-times">X</i>
    </button>
    <h2 style="text-align: center; color: white; margin-bottom: 20px;">Đăng Ký Tài Khoản</h2>
    <form id="registerForm" action="register.php" method="POST">
      <div class="input-group">
        <label for="reg-email">Email</label>
        <input type="email" name="email" id="reg-email" placeholder="Nhập email của bạn..." required />
      </div>

      <div class="input-group">
        <label for="reg-password">Mật khẩu</label>
        <input type="password" name="password" id="reg-password" placeholder="Tạo mật khẩu..." required />
      </div>

      <button type="submit" class="auth-btn btn-dang-nhap-chuan">Đăng Ký</button>

      <div class="auth-links" style="justify-content: center;">
        <p>
          Đã có tài khoản?
          <a href="#" id="link-dang-nhap-ngay" class="link-highlight">Đăng nhập ngay</a>
        </p>
      </div>
    </form>
  </div>
</div>
    <script>
  // Đăng nhập
  const nutMoLogin = document.getElementById("btn-mo-form");
  const khungLogin = document.getElementById("khung-dang-nhap");
  const nutDongLogin = document.getElementById("btn-dong-form");
  const linkToRegister = document.getElementById("link-dang-ky-ngay");

  // đăng ký
  const nutMoRegister = document.getElementById("btn-mo-form-dang-ky");
  const khungRegister = document.getElementById("khung-dang-ky");
  const nutDongRegister = document.getElementById("btn-dong-form-dang-ky");
  const linkToLogin = document.getElementById("link-dang-nhap-ngay");

  // --- XỬ LÝ FORM ĐĂNG NHẬP ---
  nutMoLogin.addEventListener("click", function (e) {
    e.preventDefault();
    khungLogin.classList.add("show");
    khungRegister.classList.remove("show"); // Tắt form đăng ký nếu đang mở
  });

  nutDongLogin.addEventListener("click", function () {
    khungLogin.classList.remove("show");
  });

  // --- XỬ LÝ FORM ĐĂNG KÝ ---
  nutMoRegister.addEventListener("click", function (e) {
    e.preventDefault();
    khungRegister.classList.add("show");
    khungLogin.classList.remove("show"); // Tắt form đăng nhập nếu đang mở
  });

  nutDongRegister.addEventListener("click", function () {
    khungRegister.classList.remove("show");
  });

  // --- CHUYỂN QUA LẠI GIỮA 2 FORM ---
  // Bấm "Đăng ký ngay" ở form login
  linkToRegister.addEventListener("click", function (e) {
    e.preventDefault();
    khungLogin.classList.remove("show");
    khungRegister.classList.add("show");
  });

  // Bấm "Đăng nhập ngay" ở form register
  linkToLogin.addEventListener("click", function (e) {
    e.preventDefault();
    khungRegister.classList.remove("show");
    khungLogin.classList.add("show");
  });

  // --- BẤM RA NGOÀI ĐỂ ĐÓNG ---
  window.addEventListener("click", function (e) {
    if (e.target === khungLogin) khungLogin.classList.remove("show");
    if (e.target === khungRegister) khungRegister.classList.remove("show");
  });
</script>
     <div class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <p>
            PHIMHAY là website xem phim trực tuyến miễn phí với kho phim đa dạng
            như phim lẻ, phim bộ, phim chiếu rạp và phim hoạt hình. Tất cả các
            bộ phim đều được cập nhật nhanh chóng với chất lượng tốt cùng phụ đề
            Vietsub giúp người xem có trải nghiệm giải trí tốt nhất.
          </p>

          <p>
            Chúng tôi luôn cố gắng mang đến cho người dùng những bộ phim mới
            nhất, nội dung hấp dẫn cùng giao diện đơn giản, dễ sử dụng. Bạn có
            thể dễ dàng tìm kiếm và thưởng thức những bộ phim yêu thích mọi lúc
            mọi nơi.
          </p>
        </div>

        <div class="footer-right">
          <div class="footer-col">
            <a href="#">Quy định</a>
            <a href="#">Điều khoản chung</a>
            <a href="#">Chính sách riêng tư</a>
          </div>

          <div class="footer-col">
            <a href="#">Giới thiệu</a>
            <a href="trangchu.php">Trang chủ</a>
            <a href="#">Facebook</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>