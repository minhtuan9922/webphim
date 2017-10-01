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
	if(isset($_SESSION['login']))
		{
		$tam = $_SESSION['login'];
		$sql = "SELECT * FROM user WHERE mail='$tam'";
		$query = mysqli_query($conn, $sql);
		$user = mysqli_fetch_array($query);
		$id_user = $user['id'];
	}
	$sql = "SELECT * FROM phim, phimyeuthich WHERE phim.idphim=phimyeuthich.idphim AND phimyeuthich.id='$id_user' ORDER BY tenphimvi ASC  LIMIT $trang,$s";
	$run = mysqli_query($conn, $sql);
?>
<div class="phimmoicapnhat">
<h2 style="text-align: center; color: #FFFFFF";>DANH SÁCH PHIM YÊU THÍCH</h2>
</br>
<form action="" method="post" enctype="multipart/form-data">
 <table class="table table-hover" >
  <tbody>
    <tr>
      <td style="color: #C19D1D">Tên phim tiếng Việt</td>
      <td style="color: #C19D1D">Tên phim tiếng Anh</td>
      <td style="color: #C19D1D">Thời lượng</td>
      <td style="color: #C19D1D">Điểm IMDB</td>
      <td style="color: #C19D1D">Poster</td>
      <td style="color: #C19D1D">Link phim</td>
      <td colspan="2" style="color: #C19D1D">Quản lý</td>
    </tr>
<?php
	  while($dong = mysqli_fetch_array($run)) {
?>
    <tr>
      <td style="color: #C19D1D"><?php echo($dong['tenphimvi']); ?></td>
      <td style="color: #C19D1D"><?php echo($dong['tenphimen']); ?></td>
      <td style="color: #C19D1D"><?php echo($dong['thoigian']); ?></td>
      <td style="color: #C19D1D"><?php echo($dong['diemimdb']); ?></td>
      <td><img src="./img/poster/<?php echo($dong['poster']); ?>" width="60px" height="90px" /></td>
      <td><a class="btn btn-default" href="?xem=xemphim&id=<?php echo($dong['idphim']); ?>"><p>Xem phim</p></a></td>
      <td><a class="btn btn-default" href="?xem=phimyeuthich&idxoa=<?php echo($dong['idphim']); ?>">Xóa</a></td>
    </tr>
<?php
	  }
?>
  </tbody>
</table>
<?php
	//Phân trang
	$sql_trang = mysqli_query($conn, "SELECT * FROM phim, phimyeuthich WHERE phim.idphim=phimyeuthich.idphim AND phimyeuthich.id='$id_user'");
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count/$s);
	$link = "?xem=phimyeuthich";
	include('./modules/content/phantrang.php'); 
	
	//Xóa phim yêu thích khỏi danh sách
	if(isset($_GET['idxoa']))
	{
		$id_phim = $_GET['idxoa'];
		mysqli_query( $conn, "DELETE FROM phimyeuthich WHERE idphim='$id_phim' AND id = '$id_user'" );
		header("location: index.php?xem=phimyeuthich");
	}
?>
</div>