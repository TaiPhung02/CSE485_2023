<?php
    include '../connectdb.php';
    $mabviet = $_GET['mabviet'];
    $sql = "DELETE FROM `baiviet` WHERE `ma_bviet` = '$mabviet';";
    $result = mysqli_query($conn,$sql);
    header('Location:article.php');
?>