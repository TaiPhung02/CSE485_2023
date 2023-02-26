<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mabviet = $_POST['txtMaBaiViet'];
        $tenTieuDe = $_POST['txtTenTieuDe'];
        $tenBaiHat = $_POST['txtTenBaiHat'];
        $maTheLoai = $_POST['txtMaTheLoai'];
        $tomTat = $_POST['txtTomTat'];
        $noiDung = $_POST['txtNoiDung'];
        $maTacGia = $_POST['txtMaTacGia'];
        $ngayViet = $_POST['date-input'];
        $hinhAnh = $_POST['file-upload'];

        $link = './images/songs/' . $_FILES['file-upload']['name'];
        $temp = $_FILES['file-upload']['tmp_name'];
        $path = '../images/songs/' . $_FILES['file-upload']['name'];
        $moved = move_uploaded_file($temp, $path);


        $sql = "UPDATE `baiviet` SET `tieude` = '$tenTieuDe', `ten_bhat` = '$tenBaiHat', `ma_tloai` = '$maTheLoai' , `tomtat` = '$tomTat',
                     `noidung` = '$noiDung' , `ma_tgia` = '$maTacGia' , `ngayviet` = '$ngayViet' , `hinhanh` = '$link$hinhAnh'
                WHERE `ma_bviet` = '$mabviet' ";
        $result = mysqli_query($conn,$sql);
        header('Location:article.php');
        exit();
    }
?>