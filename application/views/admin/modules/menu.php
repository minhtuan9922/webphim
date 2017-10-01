<?php
	if(isset($_GET['ac']) && $_GET['ac'] == 'logout')
	{
		unset($_SESSION['dangnhap']);
		header('location:./login.php');
	}
?>
 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang Chủ</a></li>
        <li class="dropdown">
          <a href="index.php?quanly=quanlyphim&ac=danhsach" class="dropdown-toggle" data-toggle="dropdown">Quản lý phim<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?quanly=quanlyphim&ac=them">Thêm phim mới</a></li>
            <li><a href="index.php?quanly=quanlyphim&ac=danhsach">Danh sách phim</a></li>
            <li><a href="index.php?quanly=quanlyphim&ac=phimbo">Quản lý phim bộ</a></li>
            <li><a href="index.php?quanly=quanlyphim&ac=doc">Nhập từ file XML</a></li>
          </ul>
        </li>
        <li><a href="index.php?quanly=quanlyuser&ac=lietke">Quản lý user</a></li>
        <li><a href="index.php?quanly=quanlyslide">Quản lý slide</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php?ac=logout"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>