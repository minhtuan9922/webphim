<?php
//	include('./modules/content/soluong.php');
//	if(isset($_GET['xem']))
//	{
//		$sql_phim = "SELECT * FROM phim ORDER BY idphim DESC LIMIT $trang,$s";
//	}
//	else
//	{
//		$sql_phim = "SELECT * FROM phim ORDER BY idphim DESC LIMIT 6";
//	}
//	
//	$phim = mysqli_query($conn, $sql_phim);
?>
<div class="phimmoicapnhat">
<h1 style="color: #003CFF; text-align: left; line-height: 50px; font-size: 18px; padding-left: 10px;"><a href="?xem=phimmoicapnhat"><?=$tieude; ?></a></h1>
<?php
	//include('./modules/content/poster.php');
	$tp = array();
	$tp['tmp'] = $loadphim;
	$this->load->view('layout/content/poster', $tp);
	//$sql_trang = mysqli_query($conn, "SELECT * FROM phim");
//	$count = mysqli_num_rows($sql_trang);
//	$a = ceil($count/$s);
//	$link = "?xem=phimmoicapnhat";
//	if(isset($_GET['xem']))
//	{
//		include('./modules/content/phantrang.php');
//	}
?>
</div>