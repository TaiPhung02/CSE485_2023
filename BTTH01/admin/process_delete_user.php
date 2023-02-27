<?php
    include '../connectdb.php';
    $idnguoidung = $_GET['id_user'];
    $sql = "DELETE FROM `users` WHERE `id_nguoidung` = '$idnguoidung';";
    $result = mysqli_query($conn,$sql);
    header('Location:user.php');
?>