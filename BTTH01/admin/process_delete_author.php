<?php
    include '../connectdb.php';
    $matgia = $_GET['matgia'];
    $sql = "DELETE FROM `tacgia` WHERE `ma_tgia` = '$matgia';";
    $result = mysqli_query($conn,$sql);
    header('Location:author.php');
?>