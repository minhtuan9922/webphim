<?php
	$s=10;
	if (isset($_GET['trang']))
	{
		$get_trang = $_GET['trang'];
	}
	else $get_trang = 0;
	if ($get_trang == 0 || $get_trang == 1)
		$trang = 0;
	else
		$trang = $get_trang * $s - $s;
	$sql = "SELECT phimbo.idphim, phim.tenphimvi, phimbo.tap, phimbo.linkphude, phimbo.linkthuyetminh, phimbo.luotxem FROM phimbo, phim WHERE phimbo.idphim = phim.idphim ORDER BY phimbo.idphim DESC, phimbo.tap ASC LIMIT $trang,$s";
	$query = mysqli_query($conn, $sql);
?>
<table class="table table-bordered">
	<tbody>
		<tr>
			<td>ID</td>
			<td>Tên phim</td>
			<td>Tập</td>
			<td>Link phụ đề</td>
			<td>Link thuyết minh</td>
			<td>Lượt xem</td>
			<td colspan="2">Quản lý tập</td>
		</tr>
		<?php
		while($phimbo = mysqli_fetch_array($query))
		{
		?>
		<tr>
			<td><?php echo($phimbo['idphim']); ?></td>
			<td><?php echo($phimbo['tenphimvi']); ?></td>
			<td><?php echo($phimbo['tap']); ?></td>
			<td><?php echo($phimbo['linkphude']); ?></td>
			<td><?php echo($phimbo['linkthuyetminh']); ?></td>
			<td><?php echo($phimbo['luotxem']); ?></td>
			<td><a class="btn btn-primary" href="index.php?quanly=quanlyphim&ac=xoa&id=<?php echo($phimbo['idphim']); ?>&tap=<?php echo($phimbo['tap']); ?>">Xóa</a></td>
			<td><a class="btn btn-primary" href="index.php?quanly=quanlyphim&ac=themtap&id=<?php echo($phimbo['idphim']); ?>">Thêm tập</a></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php
	$sql_trang = mysqli_query($conn, "SELECT * FROM phimbo");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count/$s);
	echo('
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>');
	for($i = 1; $i <=$a; $i++)
	{
		if ($get_trang == $i)
		{
			echo('<li class="active"><a href="?quanly=quanlyphim&ac=phimbo&trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="?quanly=quanlyphim&ac=phimbo&trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="#">&raquo;</a></li>
	</ul>
	');	 
?>