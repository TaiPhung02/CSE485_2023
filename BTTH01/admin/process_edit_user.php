<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['txtid'];
        $tennd = $_POST['txttennd'];
        $taikhoan = $_POST['txttaikhoan'];
        $matkhau = $_POST['txtmatkhau'];
        $quyen = $_POST['txtquyen'];
        
        $sql = "UPDATE `users` SET `id_nguoidung`='$id',`ten_nd`='$tennd',`tai_khoan`='$taikhoan',`mat_khau`='$matkhau',`quyen`='$quyen' WHERE id_nguoidung = '$id' ";
        $result = mysqli_query($conn,$sql);
        header('Location: user.php');
        
    }
?>