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
				<td width="83%" colspan="2"><input name="tenphim-vi" class="form-control" placeholder="Tựa tiếng Việt" type="text">
				</td>
			</tr>
			<tr>
				<td>Tên phim tiếng Anh</td>
				<td colspan="2"><input name="tenphim-en" type="text" class="form-control" placeholder="Tựa tiếng Anh">
				</td>
			</tr>
			<tr>
				<td rowspan="3">Đạo diễn</td>
				<td colspan="2"><input name="daodien" type="text" class="form-control" placeholder="Đạo diễn 1">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien1" type="text" class="form-control" placeholder="Đạo diễn 2">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien2" type="text" class="form-control" placeholder="Đạo diễn 3">
				</td>
			</tr>
			<tr>
				<td rowspan="4">Kịch bản</td>
				<td colspan="2"><input name="kichban" type="text" class="form-control" placeholder="Tác giả kịch bản 1">
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
				<td colspan="2"><input name="dienvien" type="text" class="form-control" placeholder="Tên diễn viên 1">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien1" type="text" class="form-control" placeholder="Tên diễn viên 2">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien2" type="text" class="form-control" placeholder="Tên diễn viên 3">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien3" type="text" class="form-control" placeholder="Tên diễn viên 4">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien4" type="text" class="form-control" placeholder="Tên diễn viên 5">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien5" type="text" class="form-control" placeholder="Tên diễn viên 6">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien6" type="text" class="form-control" placeholder="Tên diễn viên 7">
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien7" type="text" class="form-control" placeholder="Tên diễn viên 8">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien8" type="text" class="form-control" placeholder="Tên diễn viên 9">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien9" type="text" class="form-control" placeholder="Tên diễn viên 10">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien10" type="text" class="form-control" placeholder="Tên diễn viên 11">
				</td>
			</tr>
			<tr>
				<td>Năm</td>
				<td colspan="2"><input name="nam" type="text" class="form-control" placeholder="Năm sản suất">
				</td>
			</tr>
			<tr>
				<td rowspan="5">Thể loại</td>
				<td colspan="2"><input name="theloai" type="text" class="form-control" placeholder="Thể loại 1">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai1" type="text" class="form-control" placeholder="Thể loại 2">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai2" type="text" class="form-control" placeholder="Thể loại 3">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai3" type="text" class="form-control" placeholder="Thể loại 4">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai4" type="text" class="form-control" placeholder="Thể loại 5">
				</td>
			</tr>
			<tr>
				<td>Thời lượng</td>
				<td colspan="2"><input name="thoigian" type="text" class="form-control" placeholder="Thời lượng">
				</td>
			</tr>
			<tr>
				<td>Điểm IMDB</td>
				<td colspan="2"><input name="diemIMDB" type="text" class="form-control" placeholder="Điểm IMDB">
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
				<td>Phim bộ</td>
				<td colspan="2"><input type="checkbox" name="phimbo" value="Phimbo">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="them" id="them" value="Thêm" class="btn btn-primary">
				</td>
			</tr>
		</tbody>
	</table>
</form>