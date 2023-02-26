<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenTieuDe = $_POST['txtTenTieuDe'];
        $tenBaiHat = $_POST['txtTenBaiHat'];
        $maTheLoai = $_POST['txtMaTheLoai'];
        $tomTat = $_POST['txtTomTat'];
        $noiDung = $_POST['txtNoiDung'];
        $maTacGia = $_POST['txtMaTacGia'];
        $ngayViet = $_POST['date-input'];
        $hinhAnh = $_POST['file-upload'];
        
        $sql = "INSERT INTO `baiviet`(`tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) 
                VALUES ('$tenTieuDe','$tenBaiHat','$maTheLoai','$tomTat','$noiDung','$maTacGia','$ngayViet','$hinhAnh')";
        $result = mysqli_query($conn,$sql);
        header('Location: article.php');
        
    }
?>