<?php
	include( '../config.php' );
	$mail = $_POST[ 'mail' ];
	$password = $_POST['pass'];
	$re_password = $_POST['re-pass'];
	$sql = "INSERT INTO user(mail, pass, avatar) 
		VALUES ('$mail','$password', 'avatar.png')";
	$users = mysqli_query($conn, "SELECT * FROM user WHERE mail='$mail'");
	$nums = mysqli_num_rows($users);
	if ($nums > 0)
	{
		header('location:../../../index.php?thongbao=thongbao1');
	}
	else
	{
		if ($password == $re_password)
		{
			if(mysqli_query($conn, $sql))
			{
				header('location:../../../index.php?thongbao=thongbao2');
			}
			else
				header('location:../../../index.php?thongbao=thongbao3');
		}
		else
			header('location:../../../index.php?thongbao=thongbao4');
	}
?>
