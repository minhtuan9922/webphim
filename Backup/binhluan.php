<?php
	$idphim = $_GET['id'];
	$bl = "binhluan_".$idphim;
	$sql = "SELECT * FROM ".$bl;
	$binhluan = mysqli_query($conn, $sql);
	
?>
<div class="clear"></div>
<div class="phimmoicapnhat">
	<div class="row">
		<div class="col-md-12">
			<h1 style="color: #FFFFFF; font-size: 20px;">BÌNH LUẬN</h1>
		</div>
	</div>
	<?php
		while($dong_binhluan = mysqli_fetch_array($binhluan))
		{
			$iduser = $dong_binhluan['iduser'];
			$b_user = mysqli_query($conn, "SELECT * FROM user WHERE id='$iduser'");
			$dong_user = mysqli_fetch_array($b_user);
			$name_t = $dong_user['ho_ten'];
			if($name_t != "")
				$name = $name_t;
			else
				$name = $dong_user['mail'];
	?>
	<div class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src="./admin/modules/quanlyuser/avatar/avatar.png" alt="" width="auto" height="60px">
		</a>
		<div class="media-body">
			<h4 class="media-heading" style="color: #002DBF"><?php echo($name); ?></h4>
			<p style="color: #FFFFFF"><?php echo($dong_binhluan['noidung']); ?></p>
		</div>
	</div>
	<?php
		}
	?>
	<script>
//	$(function(){
//		$('button').click(function(){
//			$('#go').load('./modules/content/xuly-binhluan.php');
//		});
//	});
	</script>
<!--	<div class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src="./admin/modules/quanlyuser/avatar/avatar.png" alt="" width="auto" height="60px">
		</a>
		<div class="media-body">
			<h4 class="media-heading" style="color: #002DBF">Media heading</h4>
			<p style="color: #FFFFFF">phim này hay đây.</p>
		</div>
	</div>-->
	<?php
		if(isset($_SESSION['login']))
		{
			$tam = $_SESSION['login'];
			$sql = "SELECT * FROM user WHERE mail='$tam'";
			$query = mysqli_query($conn, $sql);
			$user = mysqli_fetch_array($query);
			$id_user = $user['id'];
			if(isset($_POST['go']))
			{
				$noidung = $_POST['noidung'];
				if($noidung != "")
				{
					$sql_bl = "INSERT INTO ".$bl." (iduser, noidung) VALUES ('$id_user', '$noidung')";
					mysqli_query( $conn, $sql_bl);
					//header("Refresh:0");
					//header("location:index.php?xem=xemphim&id=$idphim");
				}
			}
	?>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-1 col-xs-2">
			<img src="./admin/modules/quanlyuser/avatar/avatar.png" alt="" width="auto" height="35px">
		</div>
		<div class="col-md-11 col-xs-10">
			<div class="input-group">
				<input type="text" name="noidung" class="form-control">
				<span class="input-group-btn">
					<button class="btn btn-default" id="go" type="submit" name="go">Go!</button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
	</form>
	<?php
		}
	?>
</div>
