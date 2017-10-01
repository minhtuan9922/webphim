<?php
//	ob_start();
//	$id = $_GET['id'];
//	$phim = mysqli_query($conn, "SELECT * FROM phim WHERE idphim='$id' ");
//	$dong_phim = mysqli_fetch_array($phim);
//	$daodien = mysqli_query($conn, "SELECT * FROM daodien WHERE idphim='$id' ");
//	$kichban = mysqli_query($conn, "SELECT * FROM kichban WHERE idphim='$id' ");
//	$dienvien = mysqli_query($conn, "SELECT * FROM dienvien WHERE idphim='$id' ");
//	$theloai = mysqli_query($conn, "SELECT * FROM theloai WHERE idphim='$id' ");
//	$luotxem = $dong_phim['luotxem'];
//	$luotxem = $luotxem + 1;
//	mysqli_query($conn, "UPDATE phim SET luotxem='$luotxem' WHERE idphim = '$id'");
?>
<div class="container">
	<div class="phimmoicapnhat">
	<div class="thongtinphim row">
		<div class="poster col-md-4 col-xs-4">
			<img src="<?php echo base_url(); ?>/img/poster/<?php echo($phim_play['poster']); ?>" width="100%" height="auto" class="img-thumbnail" />
		</div>
		<div class="thongtin col-md-8 col-xs-8">
			<p style="color: #B8A000; font-size: 18px;"><?php echo($phim_play['tenphimvi']); ?></p>
			<p style="font-size: 16px;"><?php echo($phim_play['tenphimen']); ?></p>
			<p>Đạo diễn: 
			<?php 
				$array = array();
				foreach($daodien_play as $daodien_dong)
				{
					array_push($array, $daodien_dong['tendaodien']);
				}
				echo (implode(', ', $array));
			?>
			</p>
			<p>Kịch Bản: 
			<?php 
				$array = array();
				foreach($kichban_play as $kichban_dong)
				{
					array_push($array, $kichban_dong['kichban']);
				}
				echo (implode(', ', $array));
			?>
			</p>
			<p>Diễn Viên: 
			<?php 
				$array = array();
				foreach($dienvien_play as $dienvien_dong)
				{
					array_push($array, $dienvien_dong['tendienvien']);
				}
				echo (implode(', ', $array));
			?>
			</p>
			<p>Năm sản xuất: <?php echo($phim_play['nam']) ?></p>
			<p><img src="<?php echo base_url(); ?>/img/imdb.png" height="20px" pandding="0">: <?php echo($phim_play['diemimdb']); ?></p>
			<p>Thời lượng: <?php echo($phim_play['thoigian']); ?></p>
			<p>Thể loại: 
			<?php 
			$i = 1;
			foreach($theloai_play as $theloai_dong)
			{
			?>
				<a href="<?php echo(base_url('theloai/').$theloai_dong['tentheloai_khongdau']); ?>"><?php echo($theloai_dong['tentheloai']); ?></a>
			<?php
					echo(", ");	
			} 
			?>
			</p>
			<?php
				if(isset($_SESSION['login']))
				{
					echo('<a href="index.php?xem=xemphim&id='.$id.'&add=phimyeuthich" class="btn btn-info" role="button"><span class="glyphicon glyphicon-heart"></span> Phim yêu thích</a>');
					
					if(isset($_GET['add']))
					{
						$sql1 = "INSERT INTO phimyeuthich (id, idphim) VALUES ('$id_user', '$id')";
						if(mysqli_query($conn, $sql1))
						{
							echo('<script>alert("Bạn đã thêm phim này vào mục yêu thích.")</script>"');
							//header("location:index.php?xem=xemphim&id=$id");
						}
						else
						{
							echo('<script>alert("Thêm phim vào mục yêu thích không thành công.")</script>"');
							//header("location:index.php?xem=xemphim&id=$id");
						}
					}
				}
			?>

		</div>
	</div>
	<div class="play">
		<p style="color: #B8A000; font-size: 18px; padding-top: 20px;">Giới thiệu phim:</p>
		<p style="color: #9F9F9F; text-align: justify;"><?php echo($phim_play['mota']); ?></p>
	</div>
	<p style="color: #FF181C; font-size: 20px;">Bạn đang xem phim: <?php echo($phim_play['tenphimvi']); ?></p>
	<?php
	if($phim_play['phimbo'] == 'Phimbo')
	{
		
	?>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#phude">Phụ đề</a></li>
			<li><a href="#thuyetminh">Thuyết minh</a></li>
		</ul>
		<div class="tab-content">
			<div id="phude" class="tab-pane fade in active">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="<?php echo($phimbo_play_tap['linkphude']); ?>" allowfullscreen></iframe>
				</div>
			</div>
			<div id="thuyetminh" class="tab-pane fade">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="<?php echo($phimbo_play_tap['linkthuyetminh']); ?>" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</br>
		<div class="btn-group">
		<?php
		foreach($phimbo_play as $phimbo){
		?>
			<a href="<?php echo(base_url('play/phim/').$idphim.'/'.$phimbo['tap']); ?>" class="btn btn-primary <?php if($phimbo['tap']==$tap){echo("active");} ?>">Tập <?php echo($phimbo['tap']); ?></a>
		<?php
		}
		?>
		</div>
	<?php
	}
	else
	{
	if($phim_play['linkphim'] != '')
	{
	?>
	<ul class="nav nav-tabs">
		<li class="active"><a href="#phude">Phụ đề</a></li>
		<li><a href="#thuyetminh">Thuyết minh</a></li>
	</ul>
	<div class="tab-content">
		<div id="phude" class="tab-pane fade in active">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?php echo($phim_play['linkphim']); ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div id="thuyetminh" class="tab-pane fade">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?php echo($phim_play['linkphim_tm']); ?>" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<?php
	}
	else
	{
	?>
	<ul class="nav nav-tabs">
		<li class="active"><a href="#thuyetminh">Thuyết minh</a></li>
		<li><a href="#phude">Phụ đề</a></li>
	</ul>
	<div class="tab-content">
		<div id="thuyetminh" class="tab-pane fade in active">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?php echo($phim_play['linkphim_tm']); ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div id="phude" class="tab-pane fade">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?php echo($phim_play['linkphim']); ?>" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<?php
	}
	}
	?>
	<div class="clear"></div>
	<h1 style="color: #FFFFFF; font-size: 24px; padding-top: 20px;">BÌNH LUẬN</h1>
	<div class="fb-comments" data-href="<?php echo(base_url('play/phim').$idphim); ?>" data-numposts="5" width="100%" data-colorscheme="dark"></div>
	</div>
</div>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>