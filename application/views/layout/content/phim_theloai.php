<?php
	$s=18;
	if (isset($_GET['trang']))
	{
		$get_trang = $_GET['trang'];
	}
	else $get_trang = 0;
	if ($get_trang == 0 || $get_trang == 1)
		$trang = 0;
	else
		$trang = $get_trang * $s - $s;
	$ten_theloai = $_GET['theloai'];
	$sql_phim_theloai = "SELECT phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster, phim.mota FROM phim, theloai WHERE theloai.tentheloai_khongdau='$ten_theloai' AND phim.idphim=theloai.idphim ORDER BY idphim DESC LIMIT $trang,$s";
	$phim = mysqli_query($conn, $sql_phim_theloai);
	$query = mysqli_query($conn, "SELECT tentheloai FROM theloai WHERE tentheloai_khongdau='$ten_theloai' LIMIT 1");
	$theloai = mysqli_fetch_array($query);
?>
<div class="phimmoicapnhat">
<h1 style="color: #003CFF; text-align: left; line-height: 50px; font-size: 24px; padding-left: 10px;">Phim thuộc thể loại <?php echo($theloai['tentheloai']); ?></h1>
<?php
	include('./modules/content/poster.php');
	$trang_phim_theloai = mysqli_query($conn, "SELECT phim.idphim, phim.tenphimvi, phim.tenphimen, phim.poster FROM phim, theloai WHERE theloai.tentheloai_khongdau='$ten_theloai' AND phim.idphim=theloai.idphim");
	$count = mysqli_num_rows($trang_phim_theloai);
	$a = ceil($count/$s);
	echo('
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>');
	for($i = 1; $i <=$a; $i++)
	{
		if ($get_trang == $i)
		{
			echo('<li class="active"><a href="index.php?xem=phim_theloai&theloai='.$ten_theloai.'&trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="index.php?xem=phim_theloai&theloai='.$ten_theloai.'&trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="#">&raquo;</a></li>
	</ul>
	');	 
?>
</div>
