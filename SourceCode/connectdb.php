<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    if (!$conn) {
        die('Kết nối tới Sever thất bại.');
    }
?>