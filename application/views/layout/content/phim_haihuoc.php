<?php
//	include('./modules/content/soluong.php');
//	$ten_theloai = "Haihuoc";
//	if(isset($_GET['xem']))
//	{
//		$sql_phim_theloai = "SELECT phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster, phim.mota FROM phim, theloai WHERE theloai.tentheloai_khongdau='$ten_theloai' AND phim.idphim=theloai.idphim ORDER BY idphim DESC LIMIT $trang,$s";
//	}
//	else
//	{
//		$sql_phim_theloai = "SELECT phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster, phim.mota FROM phim, theloai WHERE theloai.tentheloai_khongdau='$ten_theloai' AND phim.idphim=theloai.idphim ORDER BY RAND() LIMIT 6";
//	}
//	$phim = mysqli_query($conn, $sql_phim_theloai);
//	$query = mysqli_query($conn, "SELECT tentheloai FROM theloai WHERE tentheloai_khongdau='$ten_theloai' LIMIT 1");
//	$theloai = mysqli_fetch_array($query);
?>
<div class="phimmoicapnhat">
<h1 style="color: #003CFF; text-align: left; line-height: 50px; font-size: 18px; padding-left: 10px;"><a href="?xem=phimhaihuoc">PHIM HÀI</a></h1>
<?php
	$tp = array();
	$tp['tmp'] = $phim_haihuoc;
	$this->load->view('layout/content/poster', $tp);
	//include('./modules/content/poster.php');
//	$trang_phim_theloai = mysqli_query($conn, "SELECT phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster FROM phim, theloai WHERE theloai.tentheloai_khongdau='$ten_theloai' AND phim.idphim=theloai.idphim");
//	$count = mysqli_num_rows($trang_phim_theloai);
//	$a = ceil($count/$s);
//	$link = "?xem=phimhaihuoc";
//	if(isset($_GET['xem']))
//	{
//		include('./modules/content/phantrang.php'); 
//	}
?>
</div>
