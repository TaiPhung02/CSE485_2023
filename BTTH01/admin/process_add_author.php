<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentgia = $_POST['txttentgia'];
        
        $sql = "INSERT INTO `tacgia`(`ten_tgia`) VALUES ('$tentgia')";
        $result = mysqli_query($conn,$sql);
        header('Location: author.php');
    }
?>