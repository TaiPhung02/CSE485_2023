<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentloai = $_POST['txttentloai'];

        $sql = "INSERT INTO `theloai`(`ten_tloai`) VALUES ('$tentloai')";
        $result = mysqli_query($conn,$sql);
        header('Location: category.php');   
    }
?>