<div class="quanly">
	<div class="them-sua-phim">
		<?php
		if(isset($_GET['ac']))
		{
			$tam=$_GET['ac'];
		}
		else
			$tam='';
		if($tam=='them')
		{
			include('modules/quanlyphim/them.php');
		}
		elseif($tam=='sua')
		{
			include('modules/quanlyphim/sua.php');
		}
		elseif($tam=='doc')
		{
			include('modules/quanlyphim/docfilexml.php');
		}
		elseif($tam=='phimbo')
		{
			include('modules/quanlyphim/phimbo.php');
		}
		elseif($tam=='themtap')
		{
			include('modules/quanlyphim/themtap.php');
		}
		elseif($tam =='xoa')
		{
			$id = $_GET['id'];
			$tap = $_GET['tap'];
			mysqli_query( $conn, "DELETE FROM phimbo WHERE idphim='$id' AND tap='$tap'");
			header("location:index.php?quanly=quanlyphim&ac=phimbo");
		}
		else include('modules/quanlyphim/lietke.php');
		?>
</div>
