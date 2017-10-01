<?php
//ob_start();
//$sql_theloai = "SELECT DISTINCT tentheloai, tentheloai_khongdau FROM theloai";
//$theloai = mysqli_query( $conn, $sql_theloai );
//session_start();
?>
<div id="header">
	<div id="menu">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><img style="margin-top: -15px;" src="<?php echo base_url(); ?>img/icon.png" width="50px"/></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo base_url(); ?>">TRANG CHỦ</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">THỂ LOẠI <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
								foreach($theloai as $dong_theloai)
								{
								?>
								<li>
									<a href="<?php echo(base_url('theloai/').$dong_theloai['tentheloai_khongdau']); ?>">
										<?php echo($dong_theloai['tentheloai']); ?>
									</a>
								</li>
								<?php
								}
								?>
							</ul>
						</li>
						<li><a href="index.php?xem=phim_theloai&theloai=Phimbo">PHIM BỘ</a></li>
						<li><a href="<?php echo base_url(); ?>gioi-thieu.php">GIỚI THIỆU</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search" method="get" action="index.php">
						<div class="form-group dropdown">
							<input type="text" class="form-control dropdown-toggle" name="tukhoa" placeholder="Tìm kiếm" value="" onkeyup="showResult(this.value)" id="menu1" data-toggle="dropdown">
							<ul id="livesearch" class="dropdown-menu" role="menu" aria-labelledby="menu1"></ul>
						</div>
						<button type="submit" id="tim" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php
						if (isset($_SESSION['login']))
						{
							$mail = $this->session->userdata('login');
							$user = $this->Mlogin->user($mail);
							if($user['ho_ten'] != '')
							{
								$data['name'] = $user['ho_ten'];
							}
							else
							{
								$data['name'] = $user['mail'];
							}
							$this->load->view('layout/header/menu_login', $data);
							//include( './modules/header/menu_login.php' );
						} else
							$this->load->view('layout/header/dangnhap_dangky');
							//include( './modules/header/dangnhap_dangky.php' );
						?>
					</ul>
				</div>
			</div>
		</nav>
	</div>

<!--<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>-->
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      //document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","modules/content/tim-kiem.php?q="+str,true);
  xmlhttp.send();
}
</script>