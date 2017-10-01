<?php
	$s=18;
	if (isset($_GET['trang']))
	{
		$get_trang = $_GET['trang'];
	}
	else $get_trang = 0;
	if ($get_trang == 0 || $get_trang == 1)
		$trang = 0;
	else
		$trang = $get_trang * $s - $s;
?>