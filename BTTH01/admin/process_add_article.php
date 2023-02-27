<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenTieuDe = $_POST['txtTenTieuDe'];
        $tenBaiHat = $_POST['txtTenBaiHat'];
        $maTheLoai = $_POST['txtMaTheLoai'];
        $tomTat = $_POST['txtTomTat'];
        $noiDung = $_POST['txtNoiDung'];
        $maTacGia = $_POST['txtMaTacGia'];
        $ngayviet = $_POST['date-input'];
        $hinhAnh = $_POST['file-upload'];

        $link = './images/songs/' . $_FILES['file-upload']['name'];
        $temp = $_FILES['file-upload']['tmp_name'];
        $path = '../images/songs/' . $_FILES['file-upload']['name'];
        $moved = move_uploaded_file($temp, $path);

        $sql = "INSERT INTO `baiviet`(`tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) 
                VALUES ('$tenTieuDe','$tenBaiHat','$maTheLoai','$tomTat','$noiDung','$maTacGia','$ngayviet','$link$hinhAnh')";
        $result = mysqli_query($conn,$sql);
        header('Location: article.php');
    }    
?>