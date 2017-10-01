<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quản trị webstit</title>
<!--<link href="css/style.css" type="text/css" rel="stylesheet" />-->
<link href="./css/bootstrap.css" type="text/css" rel="stylesheet" />
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--<script src="../js/tinymce.min.js"></script>
<script>
	tinymce.init({
  selector: 'textarea',
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
});

</script>-->

</head>


<?php
	session_start();
	if (!isset($_SESSION['dangnhap']))
	{
		header('location:./login.php');
	}
?>
<div class="container">
	<?php
		include('modules/config.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
		include('modules/footer.php');
	
//	$y = "https://drive.google.com/open?id=0Bz7FgiHfhIxqbFpwUjlLOU5NbEE";
//	echo strlen($y);
//	$z = "https://drive.google.com/open?id=";
//	$vt = strpos($y, '=');
//	$vt++;
//	$kq = substr($y, $vt);
//	echo($kq."</br>");
//	$x = "https://drive.google.com/file/d/".$kq."/preview";
//	echo($x);
//	function get_id_google($str) {
//		$vt = strpos($str, '=');
//		$vt++;
//		$str = substr($str, $vt);
//		$str = "https://drive.google.com/file/d/".$str."/preview";
//  return $str;
//  }
//	$kq = get_id_google($y);
//	echo($kq."</br>");
	?>
</div>
</body>
</html>