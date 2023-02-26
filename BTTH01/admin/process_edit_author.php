<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentgia = $_POST['txttentgia'];
        $matgia = $_POST['txtmatgia'];
        $sql = "UPDATE `tacgia` SET `ten_tgia` = '$tentgia' WHERE `ma_tgia` = '$matgia';";
        $result = mysqli_query($conn,$sql);
        header('Location:author.php');
        exit();
    }
?>