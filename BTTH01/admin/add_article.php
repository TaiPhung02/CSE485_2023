<?php 
include "../connectdb.php"; 
if(!$_SESSION['login']) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="article.php">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Người dùng</a>
                    </li>
                </ul>
                <div style="
                padding:10px;
                border:1px solid black;
                border-radius:50px;
                "><a style="text-decoration:none;
                color:black;" href="logout.php">Đăng xuất</a></div>
                </div>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="process_add_article.php"  enctype="multipart/form-data" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tiêu đề</span>
                        <input type="text" class="form-control" name="txtTenTieuDe" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtTenBaiHat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mã thể loại</span>
                        <select class="form-select" name="txtMaTheLoai" >
                            <?php
                            // Kết nối tới database
                            $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
                            // Lấy danh sách thể loại từ bảng theloai
                            $sql = "SELECT * FROM theloai";
                            $result = mysqli_query($con, $sql);
                            // Hiển thị các tùy chọn thể loại trong dropdown list
                            while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['ma_tloai'] . '" selected>' . $row['ten_tloai'] . '</option>';
                            }
                            ?>
                        </select>

                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span style = "padding: 0px 25px 0px 25px" class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="txtTomTat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span  style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control" name="txtNoiDung" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span style = "padding: 0px 15px 0px 15px" class="input-group-text" id="lblCatName">Mã tác giả</span>
                        <select class="form-select" name="txtMaTacGia" >
                            <?php
                            // Kết nối tới database
                            $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
                            // Lấy danh sách thể loại từ bảng theloai
                            $sql = "SELECT * FROM tacgia";
                            $result = mysqli_query($con, $sql);
                            // Hiển thị các tùy chọn thể loại trong dropdown list
                            while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['ma_tgia'] . '" selected>' . $row['ten_tgia'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="datetime-local" id="date-input" name="date-input">
                    </div>
                    <div class="input-group mt-3 mb-3">
                    <span  style = "padding: 0px 18px 0px 18px" class="input-group-text" id="lblCatName">Hình ảnh</span>
                         <input type="file" id="file-upload" name="file-upload">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>