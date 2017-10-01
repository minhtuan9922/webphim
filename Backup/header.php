<?php
	ob_start();
	$sql_theloai = "SELECT DISTINCT tentheloai, tentheloai_khongdau FROM theloai";
	$theloai = mysqli_query($conn, $sql_theloai);
	session_start();
?>
<div id="header">
	<div class="row">
		<div class="col-md-12">
			<img src="img/banner.jpg" width="100%" class="img-rounded"/>
		</div>
	</div>
	<div id="menu">
		<nav class="navbar navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.php">TRANG CHỦ</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">THỂ LOẠI<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<?php
						while($dong_theloai = mysqli_fetch_array($theloai)) {
					?>
						<li><a href="index.php?xem=phim_theloai&theloai=<?php echo($dong_theloai['tentheloai_khongdau']); ?>"><?php echo($dong_theloai['tentheloai']); ?></a></li>
					<?php
						}
					?>
					</ul>
				</li>
				<li><a href="#">GIỚI THIỆU</a></li>
			
				<li>
					<div class="widget_search">
						<form method="get" id="form-search" action="index.php">
							<div>
								<input type="text" name="tukhoa" placeholder="Tìm theo: Tên phim, đạo diễn, diễn viên" value="">
								<input name="" id="search" class="" value=" " type="submit">
							</div>
						</form>
					</div>
				</li>
				<?php
					if(isset($_SESSION['login']))
					{
						include('./modules/header/menu_login.php');
					}
					else
						include('./modules/header/dangnhap_dangky.php');
				?>
				</ul>
			</div>
		</nav>
	</div>
	<?php
		include('./slide/slide.php');
	?>
</div>