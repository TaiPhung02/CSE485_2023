<?php
    function checkUser($user, $pass) {
        $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
        $stmt = $conn->prepare("SELECT * FROM tb_user WHERE user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        if(count($result)>0) return $result[0]['role'];
        else return 0;
        
    }
?>