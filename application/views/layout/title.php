<?php
	if (isset($_GET['xem']))
	{

		$tam = $_GET['xem'];
		if ($tam == 'phim_theloai')
		{
			$ten_theloai = $_GET['theloai'];
			$query = mysqli_query($conn, "SELECT tentheloai FROM theloai WHERE tentheloai_khongdau='$ten_theloai' LIMIT 1");
			$theloai = mysqli_fetch_array($query);
			echo("Thể loại ".$theloai['tentheloai']);
		}
		elseif ($tam == 'thongtin')
		{
			echo("Cập nhật thông tin");
		}
		elseif ($tam == 'doimatkhau')
		{
			echo("Đổi mật khẩu");
		}
		elseif ($tam == 'phimyeuthich')
		{
			echo("Phim yêu thích");
		}
		elseif($tam == 'phimmoicapnhat')
		{
			echo("Phim mới cập nhật");
		}
		elseif($tam == 'phimhanhdong')
		{
			echo("Phim hành động");
		}
		elseif($tam == 'phimhoathinh')
		{
			echo("Phim hoạt hình");
		}
		elseif($tam == 'phimhaihuoc')
		{
			echo("Phim hài");
		}
		elseif($tam == 'xemphim')
		{
			$id = $_GET['id'];
			$phim = mysqli_query($conn, "SELECT * FROM phim WHERE idphim='$id' ");
			$dong_phim = mysqli_fetch_array($phim);
			echo($dong_phim['tenphimvi']);
		}
	}
	elseif(isset($_GET['tukhoa']))
	{
		echo("Tìm kiếm");
	}
	else
	{
		echo("PhimMT | Trang chủ");
	}
?>