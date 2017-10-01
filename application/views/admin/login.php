<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="./css/signin.css" type="text/css" rel="stylesheet" />
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>

<body>
<?php
	include('./modules/config.php');
	session_start();
	//session_destroy();
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM admin WHERE username='$username' AND pass='$password' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$nums = mysqli_num_rows($query);
		if ($nums > 0)
		{
			$_SESSION['dangnhap'] = $username;
			header('location:./index.php');
		}
		else 
		{
			header('location:./index.php');
		}
	}
?>
<div class="container">
	<h3 style="text-align: center">Chào mừng bạn đến với trang quản trị</h3>
	<form action="" method="post" class="form-signin">
		<label for="inputEmail3" class="sr-only">USERNAME</label>
		<input type="text" name="username" class="form-control" placeholder="Username">
		<label for="inputPassword3" class="sr-only">PASSWORD</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		<div class="checkbox">
			<label><input type="checkbox">Remember me</label>
		</div>
		<button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Sign in</button>
	</form>
</div>
</body>
</html>