<?php
	$tam = $_SESSION['login'];
	$sql = "SELECT * FROM user WHERE mail='$tam'";
	$query = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($query);
	$pass_csdl = $user['pass'];
	if(isset($_POST['doi']))
	{
		$passcu = $_POST['passcu'];
		$passmoi = $_POST['passmoi'];
		$passmoi_re = $_POST['passmoi-re'];
		if(($passcu == $pass_csdl) && ($passmoi == $passmoi_re))
		{
			$sql1 = "UPDATE user SET pass='$passmoi' WHERE mail='$tam'";
			if(mysqli_query( $conn, $sql1))
			{
				echo('<script>alert("Đổi mật khẩu thành công!")</script>"');
			}
		}
		else
		{
			echo('<h4 style="color: #FFFFFF;">Mật khẩu cũ không đúng hoặc pass mới sai.</h4>');
		}
	}
	
?>
<div class="phimmoicapnhat row">
<h4 style="text-align: center; color: #FFFFFF;">ĐỔI MẬT KHẨU</h4>
<form action="" method="post" enctype="multipart/form-data" class="col-md-4 col-md-offset-4">
	<div class="form-group">
		<label for="pwd" style="color: #FFFFFF">Mật khẩu cũ:</label>
		<input type="password" class="form-control" name="passcu" id="passcu" placeholder="Mật khẩu cũ">
	</div>
	<div class="form-group">
		<label for="pwd" style="color: #FFFFFF">Mật khẩu mới:</label>
		<input type="password" class="form-control" name="passmoi" id="passmoi" placeholder="Mật khẩu mới">
	</div> 
	<div class="form-group">
		<label for="pwd" style="color: #FFFFFF">Nhập lại mật khẩu mới:</label>
		<input type="password" class="form-control" name="passmoi-re" id="passmoi-re" placeholder="Nhập lại mật khẩu mới">
	</div> 
	<input type="submit" name="doi" id="doi" value="Đổi mật khẩu" class="btn btn-lg btn-primary btn-block">
</form>
</div>