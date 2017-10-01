<?php
	include('../admin/modules/config.php');
	session_start();
	if(isset($_POST['login']))
	{
		$mail = $_POST['mail'];
		$password = $_POST['pass'];
		$sql = "SELECT * FROM user WHERE mail='$mail' and pass='$password' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if($num == 0)
		{
			header('location:../../../index.php?thongbao=thongbao5');
		}
		else
		{
			$_SESSION['login'] = $mail;
			header('location:../../../index.php');
		}
	}
?>
