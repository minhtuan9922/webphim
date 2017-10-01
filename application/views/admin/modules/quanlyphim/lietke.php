<meta charset="utf-8">
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
$sql = "SELECT * FROM phim ORDER BY idphim DESC LIMIT $trang,$s";
$run = mysqli_query($conn, $sql);
?>
<h3 style="text-align: center">DANH SÁCH PHIM</h3>
 <table class="table table-hover" >
  <tbody>
    <tr>
      <td>ID</td>
      <td>Tên phim tiếng Việt</td>
      <td>Tên phim tiếng Anh</td>
      <td>Thời lượng</td>
      <td>Điểm IMDB</td>
      <td>Poster</td>
      <td>Link phim</td>
      <td>Link thuyết minh</td>
      <td>Lượt xem</td>
      <td colspan="2">Quản lý</td>
    </tr>
<?php
	  while($dong = mysqli_fetch_array($run)) {
?>
    <tr>
      <td><?php echo($dong['idphim']); ?></td>
      <td><?php echo($dong['tenphimvi']); ?></td>
      <td><?php echo($dong['tenphimen']); ?></td>
      <td><?php echo($dong['thoigian']); ?></td>
      <td><?php echo($dong['diemimdb']); ?></td>
      <td><img src="../img/poster/<?php echo($dong['poster']); ?>" width="60px" height="90px" /></td>
      <td><a href="<?php echo($dong['linkphim']); ?>"><p>Link phim</p></a></td>
      <td><a href="<?php echo($dong['linkphim_tm']); ?>"><p>Link thuyết minh</p></a></td>
      <td><?php echo($dong['luotxem']); ?></td>
		<td><a class="btn btn-primary" href="index.php?quanly=quanlyphim&ac=sua&id=<?php echo($dong['idphim']); ?>">Sửa</a></td>
      <td><a class="btn btn-primary" href="modules/quanlyphim/xuly.php?id=<?php echo($dong['idphim']); ?>">Xóa</a></td>
    </tr>
<?php
	  }
?>
  </tbody>
</table>
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
			echo('<li class="active"><a href="?quanly=quanlyphim&ac=danhsach&trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="?quanly=quanlyphim&ac=danhsach&trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="#">&raquo;</a></li>
	</ul>
	');	 
?>
