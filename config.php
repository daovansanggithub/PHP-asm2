<?php
    $conn = mysqli_connect('localhost', 'root', '', 'asm2-php1');
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'UTF8'");
        // echo "Ket noi thanh cong";
    } else {
        echo 'ket noi that bai';
    }
?>