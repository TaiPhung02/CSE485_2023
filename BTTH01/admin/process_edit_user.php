<?php
    include '../connectdb.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['txtid'];
        
        $sql = "INSERT INTO `tb_user`(`id`) VALUES ('$id')";
        $result = mysqli_query($conn,$sql);
        header('Location: user.php');
        
    }
?>