<div class="quanly">
	<div class="quanlyuser">
		<?php
		if(isset($_GET['ac']))
		{
			$tam=$_GET['ac'];
		}
		else
			$tam='';
		if($tam=='lietke')
		{
			include('modules/quanlyuser/lietke.php');
		}
		if($tam=='sua')
		{
			include('modules/quanlyuser/sua.php');
		}
		if ($tam == 'xoa')
		{
			$id = $_GET['id'];
			mysqli_query( $conn, "DELETE FROM user WHERE id='$id'" );
			header('location:index.php?quanly=quanlyuser&ac=lietke');
		}
		?>
	</div>
</div>
