<?php
$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'u787854793_phim';
$conn = mysqli_connect( $tenmaychu, $tentaikhoan, $pass, $csdl ) or die ( 'Không kết nối được!' );
mysqli_set_charset($conn, "utf8");
//mysqli_select_db( $csdl, $conn );
?>