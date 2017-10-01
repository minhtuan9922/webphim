<meta charset="utf-8">

<?php
$run = mysqli_query( $conn, "SELECT * FROM phim WHERE idphim=$_GET[id]" );
$phim_dong = mysqli_fetch_array( $run );

//lấy dữ liệu từ bảng dien vien
$run = mysqli_query( $conn, "SELECT * FROM dienvien WHERE idphim=$_GET[id]" );
$i = 0;
$ten_dienvien = '';
$ten_dienvien1 = '';
$ten_dienvien2 = '';
$ten_dienvien3 = '';
$ten_dienvien4 = '';
$ten_dienvien5 = '';
$ten_dienvien6 = '';
$ten_dienvien7 = '';
$ten_dienvien8 = '';
$ten_dienvien9 = '';
$ten_dienvien10 = '';
while ( $dienvien_dong = mysqli_fetch_array( $run ) ) {
	switch ( $i ) {
		case 0:
			$ten_dienvien = $dienvien_dong[ 'tendienvien' ];
			break;
		case 1:
			$ten_dienvien1 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 2:
			$ten_dienvien2 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 3:
			$ten_dienvien3 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 4:
			$ten_dienvien4 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 5:
			$ten_dienvien5 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 6:
			$ten_dienvien6 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 7:
			$ten_dienvien7 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 8:
			$ten_dienvien8 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 9:
			$ten_dienvien9 = $dienvien_dong[ 'tendienvien' ];
			break;
		case 10:
			$ten_dienvien10 = $dienvien_dong[ 'tendienvien' ];
			break;
		default:
			break;
	}
	$i++;
}

//lấy dữ liệu từ bảng daodien
$run = mysqli_query( $conn, "SELECT * FROM daodien WHERE idphim=$_GET[id]" );
$i = 0;
$ten_daodien ='';
$ten_daodien1='';
$ten_daodien2='';
while ( $tendaodien_dong = mysqli_fetch_array( $run ) ) {
	switch ( $i ) {
		case 0:
			$ten_daodien = $tendaodien_dong[ 'tendaodien' ];
			break;
		case 1:
			$ten_daodien1 = $tendaodien_dong[ 'tendaodien' ];
			break;
		case 2:
			$ten_daodien2 = $tendaodien_dong[ 'tendaodien' ];
			break;
		default:
			break;
	}
	$i++;
}


//lấy dữ liệu từ bảng kicban
$run = mysqli_query( $conn, "SELECT * FROM kichban WHERE idphim=$_GET[id]" );
$i = 0;
$tg_kichban='';
$tg_kichban1='';
$tg_kichban2='';
$tg_kichban3='';
while ( $kichban_dong = mysqli_fetch_array( $run ) ) {
	switch ( $i ) {
		case 0:
			$tg_kichban = $kichban_dong[ 'kichban' ];
			break;
		case 1:
			$tg_kichban1 = $kichban_dong[ 'kichban' ];
			break;
		case 2:
			$tg_kichban2 = $kichban_dong[ 'kichban' ];
			break;
		case 3:
			$tg_kichban3 = $kichban_dong[ 'kichban' ];
			break;
		default:
			break;
	}
	$i++;
}


//lấy dữ liệu từ bảng thể loại
$run = mysqli_query( $conn, "SELECT * FROM theloai WHERE idphim=$_GET[id]" );
$i = 0;
$ten_theloai = '';
$ten_theloai1 = '';
$ten_theloai2 = '';
$ten_theloai3 = '';
$ten_theloai4 = '';
while ( $tentheloai_dong = mysqli_fetch_array( $run ) ) {
	switch ( $i ) {
		case 0:
			$ten_theloai = $tentheloai_dong[ 'tentheloai' ];
			break;
		case 1:
			$ten_theloai1 = $tentheloai_dong[ 'tentheloai' ];
			break;
		case 2:
			$ten_theloai2 = $tentheloai_dong[ 'tentheloai' ];
			break;
		case 3:
			$ten_theloai3 = $tentheloai_dong[ 'tentheloai' ];
			break;
		case 4:
			$ten_theloai4 = $tentheloai_dong[ 'tentheloai' ];
			break;
		default:
			break;
	}
	$i++;
}

?>

<form action="modules/quanlyphim/xuly.php?id=<?php echo($phim_dong['idphim']); ?>" method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
		<tbody>
			<tr align="center">
				<td colspan="3"><strong>Chỉnh sửa thông tin phim</strong>
				</td>
			</tr>
			<tr>
				<td width="17%">Tên phim tiếng Việt</td>
				<td width="83%" colspan="2"><input name="tenphim-vi" class="form-control" type="text" value="<?php echo($phim_dong['tenphimvi']) ?>">
				</td>
			</tr>
			<tr>
				<td>Tên phim tiếng Anh</td>
				<td colspan="2"><input name="tenphim-en" type="text" class="form-control" value="<?php echo($phim_dong['tenphimen']) ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="3">Đạo diễn</td>
				<td colspan="2"><input name="daodien" type="text" class="form-control" value="<?php echo($ten_daodien) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien1" type="text" class="form-control" value="<?php echo($ten_daodien1) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="daodien2" type="text" class="form-control" value="<?php echo($ten_daodien2) ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="4">Kịch bản</td>
				<td colspan="2"><input name="kichban" type="text" class="form-control" value="<?php echo($tg_kichban) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban1" type="text" class="form-control" value="<?php echo($tg_kichban1) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban2" type="text" class="form-control" value="<?php echo($tg_kichban2) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="kichban3" type="text" class="form-control" value="<?php echo($tg_kichban3) ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="11">Diễn viên</td>
				<td colspan="2"><input name="dienvien" type="text" class="form-control" value="<?php echo($ten_dienvien) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien1" type="text" class="form-control" value="<?php echo($ten_dienvien1) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien2" type="text" class="form-control" value="<?php echo($ten_dienvien2) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien3" type="text" class="form-control" value="<?php echo($ten_dienvien3) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien4" type="text" class="form-control" value="<?php echo($ten_dienvien4) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien5" type="text" class="form-control" value="<?php echo($ten_dienvien5) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien6" type="text" class="form-control" value="<?php echo($ten_dienvien6) ?>">
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien7" type="text" class="form-control" value="<?php echo($ten_dienvien7) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien8" type="text" class="form-control" value="<?php echo($ten_dienvien8) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien9" type="text" class="form-control" value="<?php echo($ten_dienvien9) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="dienvien10" type="text" class="form-control" value="<?php echo($ten_dienvien10) ?>">
				</td>
			</tr>
			<tr>
				<td>Năm</td>
				<td colspan="2"><input name="nam" type="text" class="form-control" value="<?php echo($phim_dong['nam']) ?>">
				</td>
			</tr>
			<tr>
				<td rowspan="5">Thể loại</td>
				<td colspan="2"><input name="theloai" type="text" class="form-control" value="<?php echo($ten_theloai) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai1" type="text" class="form-control" value="<?php echo($ten_theloai1) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai2" type="text" class="form-control" value="<?php echo($ten_theloai2) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai3" type="text" class="form-control" value="<?php echo($ten_theloai3) ?>">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input name="theloai4" type="text" class="form-control" value="<?php echo($ten_theloai4) ?>">
				</td>
			</tr>
			<tr>
				<td>Thời lượng</td>
				<td colspan="2"><input name="thoigian" type="text" class="form-control" value="<?php echo($phim_dong['thoigian']) ?>">
				</td>
			</tr>
			<tr>
				<td>Điểm IMDB</td>
				<td colspan="2"><input name="diemIMDB" type="text" class="form-control" value="<?php echo($phim_dong['diemimdb']) ?>">
				</td>
			</tr>
			<tr>
				<td>Mô tả phim</td>
				<td colspan="2"><textarea name="motaphim" class="form-control" rows="5"><?php echo($phim_dong['mota']) ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Poster</td>
				<td><input name="poster" type="text" class="form-control" value="<?php echo($phim_dong['poster']) ?>">
				</td>
				<td><input name="img-poster" type="file" class="form-control" accept="image/*"></td>
			</tr>
			<tr>
				<td>Link phim</td>
				<td colspan="2"><input name="linkphim" type="text" class="form-control" value="<?php echo($phim_dong['linkphim']) ?>">
				</td>
			</tr>
			<tr>
				<td>Link thuyết minh</td>
				<td colspan="2"><input name="linkphim_tm" type="text" class="form-control" value="<?php echo($phim_dong['linkphim_tm']) ?>">
				</td>
			</tr>
			<tr>
				<td>Phim bộ</td>
				<td colspan="2"><input type="checkbox" name="phimbo" value="Phimbo" <?php if($phim_dong['phimbo'] != ''){echo('checked="checked"');} ?>>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input class="btn btn-primary" type="submit" name="sua" id="sua" value="Sửa">
				</td>
			</tr>
		</tbody>
	</table>
</form>