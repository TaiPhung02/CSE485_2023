<?php
    include '../connectdb.php';
    $matheloai = $_GET['matloai'];
    $sql = "DELETE FROM `theloai` WHERE `ma_tloai` = '$matheloai';";
    $result = mysqli_query($conn,$sql);
    header('Location:category.php');
?>