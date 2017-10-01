<?php
	$sql = "SELECT * FROM slide ORDER BY stt ASC";
	$run = mysqli_query($conn, $sql);
	$phim = mysqli_query($conn, "SELECT * FROM phim ORDER BY idphim DESC LIMIT 20");
	if(isset($_POST['them']))
	{
		$path = "../slide/img/";
		$hinh = $_FILES['hinh']['name'];
		$hinh_tmp = $_FILES['hinh']['tmp_name'];
		move_uploaded_file($hinh_tmp,$path.$hinh);
		$tenphim = $_POST['phim'];
		if($hinh != NULL && $tenphim != 'Chọn phim')
		{
			$query = mysqli_query($conn, "SELECT idphim FROM phim WHERE tenphimvi='$tenphim'");
			$idphim = mysqli_fetch_array($query);
			$id = $idphim['idphim'];
			$sql = "INSERT INTO slide(hinh, phim, idphim) VALUES ('$hinh',N'$tenphim','$id')";
			mysqli_query($conn, $sql);
			header("Refresh:0");
		}
	}
	if(isset($_POST['sua']))
	{
		$path = "../slide/img/";
		$hinh = $_FILES['hinh']['name'];
		$hinh_tmp = $_FILES['hinh']['tmp_name'];
		move_uploaded_file($hinh_tmp,$path.$hinh);
		$tenphim = $_POST['phim'];
		$query = mysqli_query($conn, "SELECT idphim FROM phim WHERE tenphimvi='$tenphim'");
		$idphim = mysqli_fetch_array($query);
		$id = $idphim['idphim'];
		$getstt = $_GET['stt'];
		$stt = $_POST['stt'];
		if($hinh != NULL)
		{
			$sql = "UPDATE slide SET stt='$stt', hinh='$hinh', phim=N'$tenphim', idphim='$id' WHERE stt='$getstt'";

		}
		else
		{
			$sql = "UPDATE slide SET stt='$stt', phim='$tenphim', idphim='$id' WHERE stt='$getstt'";
		}
		mysqli_query($conn, $sql);
		header('location:index.php?quanly=quanlyslide');
	}
	if(isset($_GET['ac']))
	{
		$getstt = $_GET['stt'];
		if($_GET['ac'] == 'xoa')
		{
			
			$sql = "DELETE FROM slide WHERE stt='$getstt'";
			mysqli_query($conn, $sql);
			$set = "ALTER TABLE slide auto_increment = 1";
			mysqli_query($conn, $set);
			header('location:index.php?quanly=quanlyslide');
		}
		elseif($_GET['ac'] == 'sua')
		{
			$sql = "SELECT * FROM slide WHERE stt='$getstt'";
			$qr = mysqli_query($conn, $sql);
			$slide = mysqli_fetch_array($qr);
		}
		elseif($_GET['ac'] == 'up')
		{
			$sql = "SELECT * FROM slide WHERE stt='$getstt'";
			$qr = mysqli_query($conn, $sql);
			$slide = mysqli_fetch_array($qr);
			
		}
	}
?>
<form method="post" enctype="multipart/form-data">
	<table class="table table-hover">
		<tbody>
			<tr>
				<td>STT</td>
				<td colspan="2">Hình</td>
				<td>Phim</td>
				<td colspan="3">Quản lý</td>
			</tr>
			<?php
				while($dong = mysqli_fetch_array($run)) {
			?>
			<tr>
				<td><?php echo($dong['stt']); ?></td>
				<td colspan="2"><?php echo($dong['hinh']); ?></td>
				<td><?php echo($dong['phim']); ?></td>
				<td><a href="index.php?quanly=quanlyslide&ac=sua&stt=<?php echo($dong['stt']); ?>">Sửa</a></td>
				<td><a href="index.php?quanly=quanlyslide&ac=xoa&stt=<?php echo($dong['stt']); ?>">Xóa</a></td>
				<td>
					<div class="form-group">
						<a href="index.php?quanly=quanlyslide&ac=up&stt=<?php echo($dong['stt']); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-up"></span></a>
						<a href="index.php?quanly=quanlyslide&ac=down&stt=<?php echo($dong['stt']); ?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-down"></span></a>
					</div>
				</td>
			</tr>
			<?php
				}
			?>
				<tr>
				<?php
					if(isset($_GET['ac']))
					{
						if($_GET['ac'] == 'sua')
						{
				?>
							<td><input name="stt" value="<?php echo($slide['stt']); ?>" class="form-control" type="text"></td>
							<td><input name="tenhinh" value="<?php echo($slide['hinh']); ?>" class="form-control" type="text"></td>
				<?php
						}
					}
					else
					{
						echo('<td>STT</td><td>1920x544</td>');
					}
				?>
				<td><input name="hinh" type="file" class="form-control" accept="image/*"></td>
				<td>
					<select name="phim" class="form-control">
					<?php
						if(isset($_GET['ac']))
						{
							if($_GET['ac'] == 'sua')
							{
					?>
						<option><?php echo($slide['phim']); ?></option>
						<?php
							}
						}
						else
						{
						?>
						<option>Chọn phim</option>
					<?php
						while($dong_phim = mysqli_fetch_array($phim)) {
					?>
						<option><?php echo($dong_phim['tenphimvi']); ?></option>
					<?php
						}
						}
					?>
					</select>
				</td>
			</tr>
		</tbody>
	</table>
	<?php
		if(isset($_GET['ac']))
		{
			if($_GET['ac'] == 'sua')
			{
				echo('<button name="sua" id="sua" class="btn btn-default">Sửa slide</button>');
			}
		}
		else
		{
			echo('<button name="them" id="them" class="btn btn-default">Thêm slide</button>');
		}
	?>
</form>
<!--<button id="target" class="btn btn-default">Thêm slide</button>
<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
<script>
	$("#target").click(function(){
    	$("tbody").append("");        
	});
</script>-->