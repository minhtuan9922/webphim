<?php
	//$doc = new DOMDocument();
	//$doc=simplexml_load_file( 'movie.xml' );
if(isset($_POST['doc']))
{
	//$movie = $_FILES['xmlfile']['name'];
	$path = "./";
	$movie = $_FILES['xmlfile']['name'];
	$movie_tmp = $_FILES['xmlfile']['tmp_name'];
	move_uploaded_file($movie_tmp,$path.$movie);
	$xml=simplexml_load_file("$movie") or die("Error: Cannot create object");
	
	//echo $xml->Genres->Genre[0]; 
	//echo('In nội dung tại đây.');

?>
<meta charset="utf-8">
<form role="form" action="modules/quanlyphim/xuly.php" method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
		<tbody>
			<tr align="center">
				<td colspan="3"><strong>Thêm phim mới</strong>
				</td>
			</tr>
			<tr>
				<td width="17%">Tên phim tiếng Việt</td>
				<td width="83%" colspan="2"><input name="tenphim-vi" class="form-control" placeholder="Tựa tiếng Việt" type="text" value="">
				</td>
			</tr>
			<tr>
				<td>Tên phim tiếng Anh</td>
				<td colspan="2"><input name="tenphim-en" type="text" class="form-control" placeholder="Tựa tiếng Anh" value="<?php echo $xml->LocalTitle; ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="3">Đạo diễn</td>
				<td colspan="2"><input name="daodien" type="text" class="form-control" placeholder="Đạo diễn 1" value="<?php echo $xml->Director; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien1" type="text" class="form-control" placeholder="Đạo diễn 2" >
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien2" type="text" class="form-control" placeholder="Đạo diễn 3">
				</td>
			</tr>
			<tr>
				<td rowspan="4">Kịch bản</td>
				<td colspan="2"><input name="kichban" type="text" class="form-control" placeholder="Tác giả kịch bản 1" value="<?php echo $xml->WritersList; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban1" type="text" class="form-control" placeholder="Tác giả kịch bản 2">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban2" type="text" class="form-control" placeholder="Tác giả kịch bản 3">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban3" type="text" class="form-control" placeholder="Tác giả kịch bản 4">
				</td>
			</tr>
			<tr>
				<td rowspan="11">Diễn viên</td>
				<td colspan="2"><input name="dienvien" type="text" class="form-control" placeholder="Tên diễn viên 1" value="<?php echo $xml->Persons->Person[0]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien1" type="text" class="form-control" placeholder="Tên diễn viên 2" value="<?php echo $xml->Persons->Person[1]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien2" type="text" class="form-control" placeholder="Tên diễn viên 3" value="<?php echo $xml->Persons->Person[2]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien3" type="text" class="form-control" placeholder="Tên diễn viên 4" value="<?php echo $xml->Persons->Person[3]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien4" type="text" class="form-control" placeholder="Tên diễn viên 5" value="<?php echo $xml->Persons->Person[4]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien5" type="text" class="form-control" placeholder="Tên diễn viên 6" value="<?php echo $xml->Persons->Person[5]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien6" type="text" class="form-control" placeholder="Tên diễn viên 7" value="<?php echo $xml->Persons->Person[6]->Name; ?>">
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien7" type="text" class="form-control" placeholder="Tên diễn viên 8" value="<?php echo $xml->Persons->Person[7]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien8" type="text" class="form-control" placeholder="Tên diễn viên 9" value="<?php echo $xml->Persons->Person[8]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien9" type="text" class="form-control" placeholder="Tên diễn viên 10" value="<?php echo $xml->Persons->Person[9]->Name; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien10" type="text" class="form-control" placeholder="Tên diễn viên 11">
				</td>
			</tr>
			<tr>
				<td>Năm</td>
				<td colspan="2"><input name="nam" type="text" class="form-control" placeholder="Năm sản suất" value="<?php echo $xml->ProductionYear; ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="5">Thể loại</td>
				<td colspan="2"><input name="theloai" type="text" class="form-control" placeholder="Thể loại 1" value="<?php echo $xml->Genres->Genre[0]; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai1" type="text" class="form-control" placeholder="Thể loại 2" value="<?php echo $xml->Genres->Genre[1]; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai2" type="text" class="form-control" placeholder="Thể loại 3" value="<?php echo $xml->Genres->Genre[2]; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai3" type="text" class="form-control" placeholder="Thể loại 4" value="<?php echo $xml->Genres->Genre[3]; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai4" type="text" class="form-control" placeholder="Thể loại 5">
				</td>
			</tr>
			<tr>
				<td>Thời lượng</td>
				<td colspan="2"><input name="thoigian" type="text" class="form-control" placeholder="Thời lượng" value="<?php echo $xml->RunningTime; ?>">
				</td>
			</tr>
			<tr>
				<td>Điểm IMDB</td>
				<td colspan="2"><input name="diemIMDB" type="text" class="form-control" placeholder="Điểm IMDB" value="<?php echo $xml->IMDBrating; ?>">
				</td>
			</tr>
			<tr>
				<td>Mô tả phim</td>
				<td colspan="2"><textarea name="motaphim" class="form-control" rows="5" placeholder="Nhập mô tả ngắn gọn về phim này"></textarea>
				</td>
			</tr>
			<tr>
				<td>Poster</td>
				<td><input name="poster" type="text" class="form-control" placeholder="Link poster">
				</td>
				<td><input name="img-poster" type="file" class="form-control" accept="image/*"></td>
			</tr>
			<tr>
				<td>Link phim</td>
				<td colspan="2"><input name="linkphim" type="text" class="form-control" placeholder="Link phim">
				</td>
			</tr>
			<tr>
				<td>Link thuyết minh</td>
				<td colspan="2"><input name="linkphim_tm" type="text" class="form-control" placeholder="Link phim">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="them" id="them" value="Thêm">
				</td>
			</tr>
		</tbody>
	</table>
</form>
<?php
}
else
{
?>
<div class="row">
<form method="post" enctype="multipart/form-data" class="col-md-4 col-md-offset-4">
	<input name="xmlfile" type="file" class="form-control">
	<input type="submit" name="doc" id="doc" value="Đọc file" class="btn btn-default btn-lg btn-block">
</form>
</div>
<?php
}
?>