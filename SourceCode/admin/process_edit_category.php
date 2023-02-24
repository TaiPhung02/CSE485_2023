<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentloai = $_POST['txttentloai'];
        $matloai = $_POST['txtmatloai'];
        $sql = "UPDATE `theloai` SET `ten_tloai` = '$tentloai' WHERE `ma_tloai` = '$matloai';";
        $result = mysqli_query($conn,$sql);
        header('Location:category.php');
        exit();
    }
?>