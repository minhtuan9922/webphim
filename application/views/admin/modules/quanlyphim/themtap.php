<?php
ob_start();
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM phimbo WHERE idphim='$id' ORDER BY tap ASC");

?>
<form action="" method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
	  <tbody>
		<tr>
		  <td>Tập</td>
		  <td>Link phụ đề</td>
			<td>Link thuyết minh</td>
		</tr>
		  <?php
		  while($phimbo = mysqli_fetch_array($query)){
		  ?>
		<tr>
		  <td><input name="tap<?php echo($phimbo['tap']); ?>" type="text" class="form-control" value="<?php echo($phimbo['tap']); ?>"></td>
		  <td><input name="linkpdtap<?php echo($phimbo['tap']); ?>" type="text" class="form-control" value="<?php echo($phimbo['linkphude']); ?>"></td>
			<td><input name="linktmtap<?php echo($phimbo['tap']); ?>" type="text" class="form-control" value="<?php echo($phimbo['linkthuyetminh']); ?>"></td>
		</tr>
		  <?php
		  }
		  ?>
	  </tbody>
	</table>
	<button type="submit" name="hoantat" class="btn btn-primary" style="float: right">Hoàn tất</button>
</form>
<?php
$qr = mysqli_query($conn, "SELECT * FROM phimbo WHERE idphim='$id' ORDER BY tap DESC LIMIT 1");
$tap = mysqli_fetch_array($qr);
function get_id_google($str) {
	$vt = strpos($str, '=');
	$vt++;
	$str = substr($str, $vt);
	$str = "https://drive.google.com/file/d/".$str."/preview";
return $str;
}
$maxtap = $tap['tap'];
if(isset($_POST['hoantat']))
{
	//$tapphim = array();
//	$linkpd = array();
//	$linktm = array();
	$i = $maxtap;
	$j = 1;
	$tapphim = $_POST['tap'.$j];
	$lpd = $_POST['linkpdtap'.$j];
	//$ltm = $_POST['linktmtap'.$j];
	$linkpd = get_id_google($lpd);
	//$linktm = get_id_google($ltm);
	//echo($linkpd[$j]);
	//$j++;
//	$linkpd[$j] = $_POST['linkpdtap'.$j];
//	echo($linkpd[$j]);
	while($lpd != '')
	{
		if($j <= $i)
		{
			$sql = "UPDATE phimbo SET linkphude='$lpd' WHERE idphim='$id' AND tap='$tapphim'";
			mysqli_query( $conn, $sql);
		}
		else
		{
			$sql = "INSERT INTO phimbo (idphim, tap, linkphude) VALUES ('$id', '$tapphim', '$linkpd')";
			mysqli_query( $conn, $sql);
		}
		$j++;
		if(isset($_POST['tap'.$j]))
		{	
			$tapphim = $_POST['tap'.$j];
			$lpd = $_POST['linkpdtap'.$j];
			//$ltm = $_POST['linktmtap'.$j];
			$linkpd = get_id_google($lpd);
			//$linktm = get_id_google($ltm);
		}
		else break;
	}
	header("Refresh:0");
}
?>
<button id="target" class="btn btn-primary">Thêm tập</button>  
<script>
	var x = <?php echo($maxtap); ?>;
	$("#target").click(function(){
		x++;
    $("tbody").append('<tr><td><input name="tap'+x+'" type="text" class="form-control" value="'+x+'"></td><td><input name="linkpdtap'+x+'" type="text" class="form-control" value=""></td><td><input name="linktmtap'+x+'" type="text" class="form-control" value=""></td></tr>');        
	});
</script>