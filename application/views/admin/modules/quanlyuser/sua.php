<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM user WHERE id='$id'";
	$query = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($query);
	if(isset($_POST['sua']))
	{
		$path = "./modules/quanlyuser/avatar/";
		$avatar = $_FILES['avatar']['name'];
		$avatar_tmp = $_FILES['avatar']['tmp_name'];
		move_uploaded_file($avatar_tmp,$path.$avatar);
		$mail = $_POST['mail'];
		$ho_ten = $_POST['ho_ten'];
		$ngaysinh = $_POST['ngaysinh'];
		$gioitinh = $_POST['gioitinh'];
		$password = $_POST['password'];
		if($avatar == NULL)
		{
			mysqli_query( $conn, "UPDATE user SET mail='$mail', ho_ten=N'$ho_ten', ngaysinh='$ngaysinh', gioitinh=N'$gioitinh', pass='$password' WHERE id='$id'" );
			header("location:./index.php?quanly=quanlyuser&ac=sua&id=$id");
		}
		else
		{
			mysqli_query( $conn, "UPDATE user SET avatar='$avatar', mail='$mail', ho_ten=N'$ho_ten', ngaysinh='$ngaysinh', gioitinh=N'$gioitinh', pass='$password' WHERE id='$id'" );
			header("location:./index.php?quanly=quanlyuser&ac=sua&id=$id");
		}
	}
?>
<h4 style="text-align: center; color: #8C0002;">CHỈNH SỬA THÔNG TIN</h4>
<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
	  <tbody>
		  <td>Avatar</td>
		  <td><img src="./modules/quanlyuser/avatar/<?php echo($user['avatar']); ?>" width="auto" height="100px"><input name="avatar" type="file" class="form-control" accept="image/*">
		  </td>
		</tr>
		<tr>
		  <td>Mail</td>
		  <td><input name="mail" class="form-control" type="text" value="<?php echo($user['mail']); ?>"></td>
		</tr>
		<tr>
		  <td>Họ tên</td>
		  <td><input name="ho_ten" class="form-control" type="text" value="<?php echo($user['ho_ten']); ?>"></td>
		</tr>
		<tr>
		  <td>Ngày sinh</td>
		  <td><input name="ngaysinh" class="form-control" type="date" value="<?php echo($user['ngaysinh']); ?>"></td>
		</tr>
		<tr>
		  <td>Giới tính</td>
		  <td><select name="gioitinh" class="form-control">
		  	<option><?php echo($user['gioitinh']); ?></option>
		  	<option>Nam</option>
		  	<option>Nữ</option>
		  	<option>Khác</option>
		  </select></td>
		</tr>
		<tr>
		  <td>Password</td>
		  <td><input name="password" class="form-control" type="text" value="<?php echo($user['pass']); ?>"></td>
		</tr>
		<tr>
		  <td colspan="2" style="text-align: center"><input type="submit" name="sua" id="sua" value="Sửa" class="btn btn-default"></td>
		</tr>
	  </tbody>
	</table>
</form>
