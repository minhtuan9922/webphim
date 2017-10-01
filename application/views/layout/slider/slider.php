<?php
//	$sql = "SELECT * FROM slide ORDER BY stt DESC";
//	$run = mysqli_query($conn, $sql);
//	$phim = mysqli_query($conn, "SELECT * FROM phim ORDER BY idphim DESC LIMIT 20");
?>
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider">
	<?php
		foreach($slide as $dong)
		{
	?>
		<a href="index.php?xem=xemphim&id=<?php echo($dong['idphim']); ?>"><img class="img-rounded" src="<?php echo base_url(); ?>/slide/img/<?php echo($dong['hinh']); ?>" title="<?php echo($dong['phim']); ?>"/></a>
	<?php
		}
	?>
	</div>
</div>
<script>
$(window).load(function()
{
	$('#slider').nivoSlider();
});
</script>