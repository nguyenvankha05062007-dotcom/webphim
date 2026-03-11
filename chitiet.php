<?php
include "connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM movie WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title><?php echo $row['tenphim']; ?></title>
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
        <a href="#">Đăng ký</a>
      </div>
    </div>

    

<div class="movie-detail">

<div class="detail-left">

<img src="img/<?php echo $row['hinhanh']; ?>">

<button class="watch-btn" onclick="playTrailer()">▶ Xem phim</button>

<?php if(!empty($row['trailer'])){ ?>

<div class="trailer" id="trailerBox" style="display:none;">

<iframe width="800" height="450"
src="https://www.youtube.com/embed/<?php echo $row['trailer']; ?>"
allowfullscreen>
</iframe>

</div>

<?php } ?>

</div>

<div class="detail-right">

<h1><?php echo $row['tenphim']; ?></h1>

<p><b>Năm:</b> <?php echo $row['nam']; ?></p>

<p><b>Thể loại:</b> <?php echo $row['theloai']; ?></p>

<p><b>Lượt xem:</b> <?php echo $row['luotxem']; ?></p>

<h3>NỘI DUNG CHI TIẾT</h3>

<p class="mota">
<?php echo $row['mota']; ?>
</p>



</div>

</div>
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
    <div id="khung-dang-nhap" class="modal-overlay">
      <div class="modal-container auth-container relative-box">
        <button class="close-btn" id="btn-dong-form">
          <i class="fas fa-times"></i>
        </button>
        <p id="error-msg" class="error-text"></p>
        <form id="authForm" action="login.php" method="POST">
          <div class="input-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              placeholder="Nhập email của bạn..."
            />
          </div>

          <div class="input-group">
            <label for="password">Mật khẩu</label>
            <input
              type="password"
              id="password"
              placeholder="Nhập mật khẩu..."
            />
          </div>

          <button type="submit" class="auth-btn btn-dang-nhap-chuan">
            Đăng Nhập
          </button>

          <div class="auth-links">
            <p>
              Chưa có tài khoản?
              <a href="#" class="link-highlight">Đăng ký ngay</a>
            </p>
            <a href="#" class="forgot-password">Quên mật khẩu?</a>
          </div>
        </form>
      </div>
    </div>

    <script>
      const nutMo = document.getElementById("btn-mo-form");
      const khungForm = document.getElementById("khung-dang-nhap");
      const nutDong = document.getElementById("btn-dong-form");

      nutMo.addEventListener("click", function (event) {
        event.preventDefault();
        khungForm.classList.add("show");
      });

      nutDong.addEventListener("click", function () {
        khungForm.classList.remove("show");
      });

      window.addEventListener("click", function (event) {
        if (event.target === khungForm) {
          khungForm.classList.remove("show");
        }
      });
    </script>
<script>
function playTrailer(){
document.getElementById("trailerBox").style.display = "block";
}
</script>
</body>
</html>