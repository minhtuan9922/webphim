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
$sql = "SELECT * FROM user ORDER BY id DESC LIMIT $trang,$s";
$run = mysqli_query($conn, $sql);
?>
<h4 style="text-align: center; color: #8C0002;">DANH SÁCH USER</h4>
 <table class="table table-hover">
  <tbody>
    <tr>
      <td>ID</td>
      <td>Avatar</td>
      <td>Mail</td>
      <td>Họ tên</td>
      <td>Ngày sinh</td>
      <td>Giới tính</td>
      <td>Password</td>
      <td colspan="2">Quản lý</td>
    </tr>
    <?php
	  while($dong = mysqli_fetch_array($run)) {
	?>
    <tr>
      <td><?php echo($dong['id']); ?></td>
      <td><img src="./modules/quanlyuser/avatar/<?php echo($dong['avatar']); ?>" width="auto" height="100px"></td>
      <td><?php echo($dong['mail']); ?></td>
      <td><?php echo($dong['ho_ten']); ?></td>
      <td><?php echo($dong['ngaysinh']); ?></td>
      <td><?php echo($dong['gioitinh']); ?></td>
      <td><?php echo($dong['pass']); ?></td>
      <td><a href="index.php?quanly=quanlyuser&ac=sua&id=<?php echo($dong['id']); ?>">Sửa</a></td>
      <td><a href="index.php?quanly=quanlyuser&ac=xoa&id=<?php echo($dong['id']); ?>">Xóa</a></td>
    </tr>
    <?php
	  }
?>
  </tbody>
</table>
<?php
	$sql_trang = mysqli_query($conn, "SELECT * FROM user");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count/$s);
	echo('
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>');
	for($i = 1; $i <=$a; $i++)
	{
		if ($get_trang == $i)
		{
			echo('<li class="active"><a href="?quanly=quanlyuser&ac=lietke&trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="?quanly=quanlyuser&ac=lietke&trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="#">&raquo;</a></li>
	</ul>
	');	 
?>
