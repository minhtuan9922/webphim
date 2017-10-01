<?php
if(isset($_GET['tukhoa']))
{
	include('./modules/content/soluong.php');
	$tukhoa = $_GET['tukhoa'];
	$sql = "SELECT DISTINCT phim.idphim, phim.tenphimvi, phim.poster, phim.tenphimen, phim.mota FROM phim, daodien, dienvien, kichban WHERE (phim.idphim=daodien.idphim AND phim.idphim=dienvien.idphim AND phim.idphim=kichban.idphim) AND (phim.tenphimvi LIKE '%$tukhoa%' OR phim.tenphimen LIKE '%$tukhoa%' OR phim.nam LIKE '%$tukhoa%' OR daodien.tendaodien LIKE '%$tukhoa%' OR dienvien.tendienvien LIKE '%$tukhoa%' OR kichban.kichban LIKE '%$tukhoa%') LIMIT $trang,$s";
	$phim = mysqli_query($conn, $sql);

?>
<div class="phimmoicapnhat">
<h1 style="color: #003CFF; text-align: left; line-height: 50px; font-size: 24px; padding-left: 10px;">Kết quả tìm kiếm cho "<?php echo($tukhoa); ?>":</h1>
<?php
	include('./modules/content/poster.php');
	$trang_phim_timkiem = mysqli_query($conn, "SELECT DISTINCT phim.idphim, phim.tenphimvi, phim.poster FROM phim, daodien, dienvien, kichban WHERE (phim.idphim=daodien.idphim AND phim.idphim=dienvien.idphim AND phim.idphim=kichban.idphim) AND (phim.tenphimvi LIKE '%$tukhoa%' OR phim.tenphimen LIKE '%$tukhoa%' OR phim.nam LIKE '%$tukhoa%' OR daodien.tendaodien LIKE '%$tukhoa%' OR dienvien.tendienvien LIKE '%$tukhoa%' OR kichban.kichban LIKE '%$tukhoa%')");
	$count = mysqli_num_rows($trang_phim_timkiem);
	$a = ceil($count/$s);
	$link = "index.php?tukhoa=".$tukhoa;
	include('./modules/content/phantrang.php');
?>
</div>
<?php
}
else
{
	include('../../admin/modules/config.php');
	$tukhoa=$_GET["q"];
	$kq = mysqli_query($conn, "SELECT idphim, tenphimvi FROM phim WHERE tenphimvi LIKE '%$tukhoa%' OR tenphimen LIKE '%$tukhoa%' LIMIT 10");
	while($tenphim = mysqli_fetch_array($kq))
	{
		echo('<li><a href="index.php?xem=xemphim&id='.$tenphim['idphim'].'">'.$tenphim['tenphimvi'].'</a></li>');
	}
}
?>
