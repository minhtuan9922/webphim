<?php
	$sql_phim = "SELECT * FROM phim ORDER BY luotxem DESC LIMIT 10";
	$phim = mysqli_query($conn, $sql_phim);
?>
<div class="phimhot">
	<h2><a style="color:#003CFF; padding-left: 5px;">PHIM HOT</a></h2>
	<div class="phim2">
		<ul>
		<?php
			while($dong_phim = mysqli_fetch_array($phim))
			{
		?>
			<div class="row">
				<li><a href="index.php?xem=xemphim&id=<?php echo($dong_phim['idphim']); ?>">
					<div class="col-md-4 col-xs-4">
						<img src="./img/poster/<?php echo($dong_phim['poster']); ?>" width="100%" height="100%" />
					</div>
					<div class="col-md-8 col-xs-8">
						<p style="color: #B8A000;"><?php echo($dong_phim['tenphimvi']); ?></p>
						<p><?php echo($dong_phim['tenphimen']); ?></p>
					</div>
				</a></li>
			
			</div>
		<?php
			}
		?>
		</ul>
	</div>
</div>