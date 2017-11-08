<div id="content" class="container-fluid">	
	<?php
		$data['loadphim'] = $this->Mphim->phimmoicapnhat();
		$data['tieude'] = 'PHIM MỚI CẬP NHẬT';
		$data['link'] = base_url('phimmoicapnhat');
		$this->load->view('layout/content/loadphim', $data);
		echo('<div class="clear"></div>');	
	
		$data['loadphim'] = $this->Mtheloai->phim_home('Hanhdong');
		$data['tieude'] = 'PHIM HÀNH ĐỘNG';
		$data['link'] = base_url('hanhdong');
		$this->load->view('layout/content/loadphim', $data);
		echo('<div class="clear"></div>');
	
		$data['loadphim'] = $this->Mtheloai->phim_home('Hoathinh');		
		$data['tieude'] = 'PHIM HOẠT HÌNH';
		$data['link'] = base_url('hoathinh');
		$this->load->view('layout/content/loadphim', $data);
		echo('<div class="clear"></div>');
	
		$data['loadphim'] = $this->Mtheloai->phim_home('Haihuoc');
		$data['tieude'] = 'PHIM HÀI';
		$data['link'] = base_url('phimhai');
		$this->load->view('layout/content/loadphim', $data);
		echo('<div class="clear"></div>');
		//if (isset($_GET['xem']))
//		{
//
//			$tam = $_GET['xem'];
//			if ($tam == 'phim_theloai')
//			{
//				include('./modules/content/phim_theloai.php');
//				echo('<title>Phim '.$theloai['tentheloai'].'</title>');
//			}
//			elseif ($tam == 'thongtin')
//			{
//				include('./modules/content/sua_thongtin.php');
//				echo('<title>Thông tin cá nhân</title>');
//			}
//			elseif ($tam == 'doimatkhau')
//			{
//				include('./modules/content/doimatkhau.php');
//				echo('<title>Đổi mật khẩu</title>');
//			}
//			elseif ($tam == 'phimyeuthich')
//			{
//				include('./modules/content/phimyeuthich.php');
//				echo('<title>Phim yêu thích</title>');
//			}
//			elseif($tam == 'phimmoicapnhat')
//			{
//				include('./modules/content/phimmoicapnhat.php');
//				echo('<title>Phim mới cập nhật</title>');
//			}
//			elseif($tam == 'phimhanhdong')
//			{
//				include('./modules/content/phim_hanhdong.php');
//				echo('<title>Phim hành động</title>');
//			}
//			elseif($tam == 'phimhoathinh')
//			{
//				include('./modules/content/phim_hoathinh.php');
//				echo('<title>Phim hoạt hình</title>');
//			}
//			elseif($tam == 'phimhaihuoc')
//			{
//				include('./modules/content/phim_haihuoc.php');
//				echo('<title>Phim hài</title>');
//			}
//			elseif($tam == 'xemphim')
//			{

//		}
//		elseif(isset($_GET['tukhoa']))
//		{
//			include('./modules/content/tim-kiem.php');
//			echo('<title>Tìm kiếm</title>');
//		}
//		elseif(isset($_GET['thongbao']))
//		{
//			echo('<title>Thông báo</title>');
//			$thongbao = $_GET['thongbao'];
//			if ($thongbao == 'thongbao1')
//			{
//				echo('<script>alert("Tài khoản đã tồn tại. Vui lòng đăng nhập.")</script>"');
//				include('./modules/content/trangchu.php');
//			}
//			elseif ($thongbao == 'thongbao2')
//			{
//				echo('<script>alert("Bạn đã đăng ký thành công.")</script>"');
//				include('./modules/content/trangchu.php');
//			}
//			elseif ($thongbao == 'thongbao3')
//			{
//				echo('<script>alert("Lỗi kết nỗi máy chủ.")</script>"');
//				include('./modules/content/trangchu.php');
//			}
//			elseif ($thongbao == 'thongbao4')
//			{
//				echo('<script>alert("Password không đúng, vui lòng nhập lại.")</script>"');
//				include('./modules/content/trangchu.php');
//			}
//			elseif ($thongbao == 'thongbao5')
//			{
//				echo('<script>alert("Mail hoặc mật khẩu không dúng.")</script>');
//				include('./modules/content/trangchu.php');
//			}
//		}
//		else
//		{
//			include('./modules/content/trangchu.php');
//			echo('<title>PhimMT | Trang chủ</title>');
//		}

	?>
</div>