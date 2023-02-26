<?php
    include '../connectdb.php';
        $mabviet = $_GET['id_user'];
        $sql = "DELETE FROM `tb_user` WHERE `id` = '$id';";
        $result = mysqli_query($conn,$sql);
        header('Location:user.php');
?>