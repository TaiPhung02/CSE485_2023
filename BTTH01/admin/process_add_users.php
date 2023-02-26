<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tennd = $_POST['txt_tennd'];
        $taikhoan = $_POST['txt_taikhoan'];
        $matkhau = $_POST['txt_matkhau'];
        $quyen = $_POST['txt_quyen'];
        
        $sql = "INSERT INTO `users`( `ten_nd`, `tai_khoan`, `mat_khau`, `quyen`) VALUES ('$tennd',' $taikhoan','$matkhau','$quyen')";
        $result = mysqli_query($conn,$sql);
        header('Location: user.php');
    }
?>