<div id="content">
	<?php
	if(isset($_GET['quanly']))
	{
		$tam=$_GET['quanly'];
	}
	else
		$tam='';
	if($tam=='quanlyphim')
	{
		include('modules/quanlyphim/main.php');
	}
	elseif($tam=='quanlyuser')
	{
		include('modules/quanlyuser/main.php');
	}
	elseif($tam=='quanlyslide')
	{
		include('modules/quanlyslide/lietke.php');
	}
	else
	{
		echo('<h3 style="text-align: center">CHÀO MỪNG BẠN ĐẾN VỚI TRANG QUẢN TRỊ.</h3>');
		include('modules/thongke.php');
	}
	?>
</div>
</div>