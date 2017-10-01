<div id="content" class="row">
	<div class="col-md-9">
		<div class="phimmoicapnhat">
		<?php
			if (isset($_GET['xem']))
			{
				$tam = $_GET['xem'];
				if ($tam == 'phim_theloai')
				{
					include('./modules/content/phim_theloai.php');
				}
				elseif ($tam == 'xemphim')
				{
					include('./modules/content/xemphim.php');
				}
				elseif ($tam == 'thongbao1')
				{
					echo('<script>alert("Tài khoản này đã tồn tài, vui lòng đăng nhập hoặc đăng ký tài khoản khác.")</script>"');
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif ($tam == 'thongbao2')
				{
					echo('<script>alert("Bạn đã đăng ký thành công.")</script>"');
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif ($tam == 'thongbao3')
				{
					echo('<script>alert("Lỗi kết nỗi máy chủ.")</script>"');
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif ($tam == 'thongbao4')
				{
					echo('<script>alert("Password không đúng, vui lòng nhập lại.")</script>"');
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif ($tam == 'thongbao5')
				{
					echo('<script>alert("Mail hoặc mật khẩu không dúng.")</script>');
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif ($tam == 'thongtin')
				{
					include('./modules/content/sua_thongtin.php');
				}
				elseif ($tam == 'doimatkhau')
				{
					include('./modules/content/doimatkhau.php');
				}
				elseif ($tam == 'phimyeuthich')
				{
					include('./modules/content/phimyeuthich.php');
				}
				elseif($tam == 'phimmoicapnhat')
				{
					include('./modules/content/phimmoicapnhat.php');
				}
				elseif($tam == 'phimhanhdong')
				{
					include('./modules/content/phim_hanhdong.php');
				}
				elseif($tam == 'phimhoathinh')
				{
					include('./modules/content/phim_hoathinh.php');
				}
				elseif($tam == 'phimhaihuoc')
				{
					include('./modules/content/phim_haihuoc.php');
				}
			}
			elseif (isset($_GET['tukhoa']))
			{
				include('./modules/content/tim-kiem.php');
			}
			else
			{
				include('./modules/content/phimmoicapnhat.php');
				
			}
				
			
		?>
		</div>
		<?php
		if(isset($_GET['xem']))
		{
			$tam = $_GET['xem'];
			if($tam == 'xemphim')
			{
				include('./modules/content/binhluan.php');
				//echo('<iframe width="100%" src="./modules/content/binhluan.php" seamless=""></iframe>');
			}
		}
		else
		{
		?>
		<div class="clear"></div>
		<div class="phimmoicapnhat">
		<?php
			include('./modules/content/phim_hanhdong.php');
		
		
		?>
		</div>
		<div class="clear"></div>
		<div class="phimmoicapnhat">
		<?php
			include('./modules/content/phim_hoathinh.php');
		?>
		</div>
		<div class="clear"></div>
		<div class="phimmoicapnhat">
		<?php
			include('./modules/content/phim_haihuoc.php');
		?>
		</div>
		<?php
		}
		?>
	</div>
	<div class="col-md-3">
		<?php
		include('./modules/content/phimhot.php');
		//include('./modules/content/phimxemnhieu.php');
		?>
	</div>
</div>