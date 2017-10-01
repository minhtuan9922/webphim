<?php
$tenmaychu = 'mysql.hostinger.vn';
$tentaikhoan = 'u787854793_root';
$pass = 'longtrau1@';
$csdl = 'u787854793_phim';
$conn = mysqli_connect( $tenmaychu, $tentaikhoan, $pass, $csdl ) or die ( 'Không kết nối được!' );
mysqli_set_charset($conn, "utf8");
//mysqli_select_db( $csdl, $conn );
?>