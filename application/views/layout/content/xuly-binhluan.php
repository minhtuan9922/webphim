<?php
	$noidung = $_POST['noidung'];
	echo('<p style="color: #FFFFFF">'.$noidung.'<p>');
?>
	<form action="" method="post" enctype="multipart/form-data" id="binhluan">
	<div class="row">
		<div class="col-md-1 col-xs-2">
			<img src="./admin/modules/quanlyuser/avatar/<?php echo($user['avatar']); ?>" alt="" width="auto" height="35px">
		</div>
		<div class="col-md-11 col-xs-10">
			<div class="input-group">
				<input type="text" name="noidung" id="noidung" placeholder="Bình luận dành cho thành viên" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-default" id="go" type="submit" name="go">Go!</button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
	</form>
<?php
	//if(isset($_SESSION['login']))
//	{
//		$tam = $_SESSION['login'];
//		$sql = "SELECT * FROM user WHERE mail='$tam'";
//		$query = mysqli_query($conn, $sql);
//		$user = mysqli_fetch_array($query);
//		$id_user = $user['id'];
//		if(isset($_POST['go']))
//		{
//			$noidung = $_POST['noidung'];
//			if($noidung != "")
//			{
//				$sql_bl = "INSERT INTO binhluan (idphim, iduser, noidung) VALUES ('$idphim', '$id_user', N'$noidung')";
//				mysqli_query( $conn, $sql_bl);
//				header("Refresh:0");
//				//header("location:index.php?xem=xemphim&id=$idphim");
//			}
//		}
//	}
//
?>