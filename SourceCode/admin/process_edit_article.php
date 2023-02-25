<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tenbhat = $_POST['txttenbhat'];
        $mabhat = $_POST['txtmabhat'];
        $sql = "UPDATE `baiviet` SET `ten_bhat` = '$tenbhat' WHERE `ma_bviet` = '$mabhat';";
        $result = mysqli_query($conn,$sql);
        header('Location:article.php');
        exit();
    }
?>