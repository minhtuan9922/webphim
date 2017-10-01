<?php
	$idphim = $_GET['id'];
	//$bl = "binhluan_".$idphim;
//	$sql = "SELECT * FROM binhluan WHERE idphim='$idphim'";
//	$binhluan = mysqli_query($conn, $sql);
//	
?>
<div class="clear"></div>
<h1 style="color: #FFFFFF; font-size: 24px;">BÌNH LUẬN</h1>
<div class="fb-comments" data-href="index.php?xem=xemphim&id=<?php echo($idphim); ?>" data-numposts="5" width="100%" data-colorscheme="dark"></div>
