<?php
	$tam = $_SESSION['login'];
	$sql = "SELECT * FROM user WHERE mail='$tam'";
	$query = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($query);
	if(isset($_POST['sua']))
	{
		$path = "./admin/modules/quanlyuser/avatar/";
		$avatar = $_FILES['avatar']['name'];
		$avatar_tmp = $_FILES['avatar']['tmp_name'];
		move_uploaded_file($avatar_tmp,$path.$avatar);
		$ho_ten = $_POST['ho_ten'];
		$ngaysinh = $_POST['ngaysinh'];
		$gioitinh = $_POST['gioitinh'];
		$password = $_POST['password'];
		if($avatar == NULL)
		{
			mysqli_query( $conn, "UPDATE user SET ho_ten=N'$ho_ten', ngaysinh='$ngaysinh', gioitinh=N'$gioitinh' WHERE mail='$tam'" );
			header("location:?xem=thongtin&id=$get_id");
		}
		else
		{
			mysqli_query( $conn, "UPDATE user SET avatar='$avatar', ho_ten=N'$ho_ten', ngaysinh='$ngaysinh', gioitinh=N'$gioitinh' WHERE mail='$tam'" );
			header("location:?xem=thongtin");
		}
	}
	
?>
<div class="phimmoicapnhat row">
<h4 style="text-align: center; color: #FFFFFF;">CHỈNH SỬA THÔNG TIN</h4>
<form action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
	<table class="table table-bordered">
	  <tbody>
		  <td style="color: #FFFFFF">Avatar</td>
		  <td><img src="./admin/modules/quanlyuser/avatar/<?php echo($user['avatar']); ?>" width="auto" height="100px"><input name="avatar" type="file" class="form-control" accept="image/*">
		  </td>
		</tr>
		<tr>
		  <td style="color: #FFFFFF">Mail</td>
		  <td style="color: #FFFFFF"><?php echo($user['mail']); ?></td>
		</tr>
		<tr>
		  <td style="color: #FFFFFF">Họ tên</td>
		  <td><input name="ho_ten" class="form-control" type="text" value="<?php echo($user['ho_ten']); ?>"></td>
		</tr>
		<tr>
		  <td style="color: #FFFFFF">Ngày sinh</td>
		  <td><input name="ngaysinh" class="form-control" type="date" value="<?php echo($user['ngaysinh']); ?>"></td>
		</tr>
		<tr>
		  <td style="color: #FFFFFF">Giới tính</td>
		  <td><select name="gioitinh" class="form-control">
		  	<option><?php echo($user['gioitinh']); ?></option>
		  	<option>Nam</option>
		  	<option>Nữ</option>
		  	<option>Khác</option>
		  </select></td>
		</tr>
		<tr>
		  <td style="color: #FFFFFF">Password</td>
		  <td style="text-align: center"><a href="index.php?xem=doimatkhau" class="btn btn-default" role="button">Đổi mật khẩu</a></td>
		</tr>
		<tr>
		  <td colspan="2" style="text-align: center"><input type="submit" name="sua" id="sua" value="Sửa" class="btn btn-default"></td>
		</tr>
	  </tbody>
	</table>
</form>
</div>