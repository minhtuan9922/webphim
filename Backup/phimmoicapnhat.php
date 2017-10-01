<?php
	$s=16;
	if (isset($_GET['trang']))
	{
		$get_trang = $_GET['trang'];
	}
	else $get_trang = 0;
	if ($get_trang == 0 || $get_trang == 1)
		$trang = 0;
	else
		$trang = $get_trang * $s - $s;
	$sql_phim = "SELECT * FROM phim ORDER BY idphim DESC LIMIT $trang,$s";
	$phim = mysqli_query($conn, $sql_phim);
?>
<h1 style="color: #003CFF; text-align: left; line-height: 50px; font-size: 24px; padding-left: 10px;">PHIM MỚI CẬP NHẬT</h1>
<div class="row">
	<?php
		while($dong_phim = mysqli_fetch_array($phim)) {
	?>
			<div class="phim1 col-md-3 col-sm-3 col-xs-6">
				<ul>			
				<li><a href="index.php?xem=xemphim&id=<?php echo($dong_phim['idphim']); ?>">
					<img src="<?php echo($dong_phim['poster']); ?>" width="100%" height="auto" class="img" />
					<p class="tenphim" style="color: #B8A000"><?php echo($dong_phim['tenphimvi']); ?></p>
					<!--<p><?php //echo($dong_phim['tenphimen']); ?></p>-->
					</a>
				</li>
				</ul>
			</div>
	<?php
		}
	?>
</div>
<?php
	$sql_trang = mysqli_query($conn, "SELECT * FROM phim");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count/$s);
	echo('
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>');
	for($i = 1; $i <=$a; $i++)
	{
		if ($get_trang == $i)
		{
			echo('<li class="active"><a href="?trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="?trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="#">&raquo;</a></li>
	</ul>
	');	 
?>
