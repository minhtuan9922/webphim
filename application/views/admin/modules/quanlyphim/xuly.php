<meta charset="utf-8">
<?php
$id = $_GET[ 'id' ];
include( '../config.php' );


function convert_vi_to_en($str) {
	$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
	$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
	$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
	$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
	$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
	$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
	$str = preg_replace("/(đ)/", 'd', $str);
	$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
	$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
	$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
	$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
	$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
	$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
	$str = preg_replace("/(Đ)/", 'D', $str);
	$str = preg_replace("/( )/", '', $str);
  //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
  return $str;
  }
if ( isset( $_POST[ 'them' ] ) ) {
	$tenphimvi = $_POST[ 'tenphim-vi' ];
	$tenphimen = $_POST[ 'tenphim-en' ];
	$daodien = $_POST[ 'daodien' ];
	$daodien1 = $_POST[ 'daodien1' ];
	$daodien2 = $_POST[ 'daodien2' ];
	$kichban = $_POST[ 'kichban' ];
	$kichban1 = $_POST[ 'kichban1' ];
	$kichban2 = $_POST[ 'kichban2' ];
	$kichban3 = $_POST[ 'kichban3' ];
	$dienvien = $_POST[ 'dienvien' ];
	$dienvien1 = $_POST[ 'dienvien1' ];
	$dienvien2 = $_POST[ 'dienvien2' ];
	$dienvien3 = $_POST[ 'dienvien3' ];
	$dienvien4 = $_POST[ 'dienvien4' ];
	$dienvien5 = $_POST[ 'dienvien5' ];
	$dienvien6 = $_POST[ 'dienvien6' ];
	$dienvien7 = $_POST[ 'dienvien7' ];
	$dienvien8 = $_POST[ 'dienvien8' ];
	$dienvien9 = $_POST[ 'dienvien9' ];
	$dienvien10 = $_POST[ 'dienvien10' ];
	$theloai = $_POST[ 'theloai' ];
	$theloai1 = $_POST[ 'theloai1' ];
	$theloai2 = $_POST[ 'theloai2' ];
	$theloai3 = $_POST[ 'theloai3' ];
	$theloai4 = $_POST[ 'theloai4' ];
	$theloai_khongdau = convert_vi_to_en($theloai);
	$theloai1_khongdau = convert_vi_to_en($theloai1);
	$theloai2_khongdau = convert_vi_to_en($theloai2);
	$theloai3_khongdau = convert_vi_to_en($theloai3);
	$theloai4_khongdau = convert_vi_to_en($theloai4);
	$nam = $_POST[ 'nam' ];
	$thoigian = $_POST[ 'thoigian' ];
	$diemIMDB = $_POST[ 'diemIMDB' ];
	$motaphim = $_POST[ 'motaphim' ];
	$poster = $_POST[ 'poster' ];
	$linkphim = $_POST[ 'linkphim' ];
	$linkphim_tm = $_POST[ 'linkphim_tm' ];
	$path = "../../../img/poster/";
	$img_poster = $_FILES['img-poster']['name'];
	$img_poster_tmp = $_FILES['img-poster']['tmp_name'];
	$phimbo = $_POST['phimbo'];
	move_uploaded_file($img_poster_tmp,$path.$img_poster);
	if ($img_poster == NULL)
	{
		$sql = "INSERT INTO phim(tenphimvi, tenphimen, nam, thoigian, diemimdb, poster, linkphim, linkphim_tm, mota, phimbo) 
		VALUES (N'$tenphimvi',N'$tenphimen','$nam','$thoigian','$diemIMDB','$poster','$linkphim', '$linkphim_tm',N'$motaphim', '$phimbo')";
	}
	else
	{
		$sql = "INSERT INTO phim(tenphimvi, tenphimen, nam, thoigian, diemimdb, poster, linkphim, linkphim_tm, mota, phimbo) 
		VALUES (N'$tenphimvi',N'$tenphimen','$nam','$thoigian','$diemIMDB','$img_poster','$linkphim', '$linkphim_tm',N'$motaphim', '$phimbo')";
	}
	
	if ( $tenphimvi != ''
		and $tenphimen != '' ) {
		mysqli_query( $conn, $sql );
		$idphim = mysqli_insert_id( $conn ); //lấy id vừa thêm vào bảng phim
		//tạo bảng binhluan
//		$ten_bang = "binhluan_".$idphim;
//		$sql_taobang = "CREATE TABLE ".$ten_bang." (idbl INT(11) AUTO_INCREMENT PRIMARY KEY, iduser INT(11), noidung TEXT)";
//		mysqli_query($conn, $sql_taobang);
		//them vào bảng phimbo
		if($phimbo != '')
		{
			mysqli_query( $conn, "INSERT INTO phimbo (idphim, tap) VALUES ('$idphim', '1')" );
		}
		//thêm vào bảng daodien
		if ( $daodien != '' ) {
		mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien', '$idphim')" );
		}
		if ( $daodien1 != '' ) {
			mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien1', '$idphim')" );
		}
		if ( $daodien2 != '' ) {
			mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien2', '$idphim')" );
		}

		//thêm vào bảng dienvien
		if ( $dienvien != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien', '$idphim')" );
		}
		if ( $dienvien1 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien1', '$idphim')" );
		}
		if ( $dienvien2 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien2', '$idphim')" );
		}
		if ( $dienvien3 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES ('$dienvien3', '$idphim')" );
		}
		if ( $dienvien4 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien4', '$idphim')" );
		}
		if ( $dienvien5 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien5', '$idphim')" );
		}
		if ( $dienvien6 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien6', '$idphim')" );
		}
		if ( $dienvien7 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien7', '$idphim')" );
		}
		if ( $dienvien8 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien8', '$idphim')" );
		}
		if ( $dienvien9 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES ('$dienvien9', '$idphim')" );
		}
		if ( $dienvien10 != '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien10', '$idphim')" );
		}

		//thêm vào bảng kichban
		if ( $kichban != '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban', '$idphim')" );
		}
		if ( $kichban1 != '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban1', '$idphim')" );
		}
		if ( $kichban2 != '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban2', '$idphim')" );
		}
		if ( $kichban3 != '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban3', '$idphim')" );
		}

		//thêm vào bảng theloai
		if ($theloai != '') {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai', '$theloai_khongdau', '$idphim')" );
		}
		if ( $theloai1 != '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai1', '$theloai1_khongdau', '$idphim')" );
		}
		if ( $theloai2 != '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai2', '$theloai2_khongdau', '$idphim')" );
		}
		if ( $theloai3 != '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai3', '$theloai3_khongdau', '$idphim')" );
		}
		if ( $theloai4 != '' ) {
			mysqli_query( $conn, "INSERT INTO theloain (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai4', '$theloai4_khongdau', '$idphim')" );
		}

		//quay lại trang quản lý
		header( 'location: ../../index.php?quanly=quanlyphim&ac=them' );
	} else echo( '<p>Dữ liệu không hợp lệ</p>' );
	//	$sql = "INSERT INTO daodien (tendaodien, idphim)
	//		VALUES ()"

} elseif ( isset( $_POST[ 'sua' ] ) ) {
	$tenphimvi = $_POST[ 'tenphim-vi' ];
	$tenphimen = $_POST[ 'tenphim-en' ];
	$daodien = $_POST[ 'daodien' ];
	$daodien1 = $_POST[ 'daodien1' ];
	$daodien2 = $_POST[ 'daodien2' ];
	$kichban = $_POST[ 'kichban' ];
	$kichban1 = $_POST[ 'kichban1' ];
	$kichban2 = $_POST[ 'kichban2' ];
	$kichban3 = $_POST[ 'kichban3' ];
	$dienvien = $_POST[ 'dienvien' ];
	$dienvien1 = $_POST[ 'dienvien1' ];
	$dienvien2 = $_POST[ 'dienvien2' ];
	$dienvien3 = $_POST[ 'dienvien3' ];
	$dienvien4 = $_POST[ 'dienvien4' ];
	$dienvien5 = $_POST[ 'dienvien5' ];
	$dienvien6 = $_POST[ 'dienvien6' ];
	$dienvien7 = $_POST[ 'dienvien7' ];
	$dienvien8 = $_POST[ 'dienvien8' ];
	$dienvien9 = $_POST[ 'dienvien9' ];
	$dienvien10 = $_POST[ 'dienvien10' ];
	$theloai = $_POST[ 'theloai' ];
	$theloai1 = $_POST[ 'theloai1' ];
	$theloai2 = $_POST[ 'theloai2' ];
	$theloai3 = $_POST[ 'theloai3' ];
	$theloai4 = $_POST[ 'theloai4' ];
	$theloai_khongdau = convert_vi_to_en($theloai);
	$theloai1_khongdau = convert_vi_to_en($theloai1);
	$theloai2_khongdau = convert_vi_to_en($theloai2);
	$theloai3_khongdau = convert_vi_to_en($theloai3);
	$theloai4_khongdau = convert_vi_to_en($theloai4);
	$nam = $_POST[ 'nam' ];
	$thoigian = $_POST[ 'thoigian' ];
	$diemIMDB = $_POST[ 'diemIMDB' ];
	$motaphim = $_POST[ 'motaphim' ];
	$poster = $_POST[ 'poster' ];
	$linkphim = $_POST[ 'linkphim' ];
	$linkphim_tm = $_POST[ 'linkphim_tm' ];
	$phimbo = $_POST['phimbo'];
	$run = mysqli_query( $conn, "SELECT * FROM daodien WHERE idphim=$_GET[id]" );
	$i = 0;
	$ten_daodien = '';
	$ten_daodien1 = '';
	$ten_daodien2 = '';
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

	$path = "../../../img/poster/";
	$img_poster = $_FILES['img-poster']['name'];
	$img_poster_tmp = $_FILES['img-poster']['tmp_name'];
	move_uploaded_file($img_poster_tmp,$path.$img_poster);
	if ($img_poster == NULL)
	{
		$sql = "UPDATE phim SET tenphimvi=N'$tenphimvi', tenphimen=N'$tenphimen', nam='$nam', thoigian='$thoigian', diemimdb='$diemIMDB', poster='$poster', linkphim='$linkphim', linkphim_tm='$linkphim_tm', mota=N'$motaphim', phimbo='$phimbo' WHERE idphim = '$id'";
	}
	else
	{
		$sql = "UPDATE phim SET tenphimvi=N'$tenphimvi', tenphimen=N'$tenphimen', nam='$nam', thoigian='$thoigian', diemimdb='$diemIMDB', poster='$img_poster', linkphim='$linkphim', linkphim_tm='$linkphim_tm', mota=N'$motaphim', phimbo='$phimbo' WHERE idphim = '$id'";
	}
	if ( $tenphimvi != ''
		and $tenphimen != '' ) {
		//sửa dữ liệu bảng phim
		mysqli_query( $conn, $sql );
		//sửa dữ liệu bảng phimbo
		if($phimbo != '')
		{
			mysqli_query( $conn, "INSERT INTO phimbo (idphim, tap) VALUES ('$id', '1')" );
		}
		else
		{
			mysqli_query( $conn, "DELETE FROM phimbo WHERE idphim='$id'" );
		}
		//sửa dữ liệu bảng daodien
		if ( $daodien != ''
			and $ten_daodien != '' ) {
			mysqli_query( $conn, "UPDATE daodien SET tendaodien=N'$daodien' WHERE idphim='$id' AND tendaodien='$ten_daodien'" );
		} elseif ( $daodien != ''
			and $ten_daodien == '' ) {
			mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien', '$id')" );
		} elseif ( $daodien == ''
			and $ten_daodien != '' ) {
			mysqli_query( $conn, "DELETE FROM daodien WHERE idphim='$id' AND tendaodien=N'$ten_daodien'" );
		}

		if ( $daodien1 != ''
			and $ten_daodien1 != '' ) {
			mysqli_query( $conn, "UPDATE daodien SET tendaodien=N'$daodien1' WHERE idphim='$id' AND tendaodien='$ten_daodien1'" );
		} elseif ( $daodien1 != ''
			and $ten_daodien1 == '' ) {
			mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien1', '$id')" );
		} elseif ( $daodien1 == ''
			and $ten_daodien1 != '' ) {
			mysqli_query( $conn, "DELETE FROM daodien WHERE idphim='$id' AND tendaodien='$ten_daodien1'" );
		}

		if ( $daodien2 != ''
			and $ten_daodien2 != '' ) {
			mysqli_query( $conn, "UPDATE daodien SET tendaodien=N'$daodien2' WHERE idphim='$id' AND tendaodien='$ten_daodien2'" );
		} elseif ( $daodien2 != ''
			and $ten_daodien2 == '' ) {
			mysqli_query( $conn, "INSERT INTO daodien (tendaodien, idphim) VALUES (N'$daodien2', '$id')" );
		} elseif ( $daodien2 == ''
				and $ten_daodien2 != '' ) {
				mysqli_query( $conn, "DELETE FROM daodien WHERE idphim='$id' AND tendaodien='$ten_daodien2'" );
			}
			
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
		//thêm vào bảng dienvien
		if ( $dienvien != ''
			and $ten_dienvien != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien' WHERE idphim='$id' AND tendienvien='$ten_dienvien'" );
		} elseif ( $dienvien != ''
			and $ten_dienvien == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien', '$id')" );
		} elseif ( $dienvien == ''
			and $ten_dienvien != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien'" );
		}

		if ( $dienvien1 != ''
			and $ten_dienvien1 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien1' WHERE idphim='$id' AND tendienvien='$ten_dienvien1'" );
		} elseif ( $dienvien1 != ''
			and $ten_dienvien1 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien1', '$id')" );
		} elseif ( $dienvien1 == ''
			and $ten_dienvien1 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien1'" );
		}

		if ( $dienvien2 != ''
			and $ten_dienvien2 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien2' WHERE idphim='$id' AND tendienvien='$ten_dienvien2'" );
		} elseif ( $dienvien2 != ''
			and $ten_dienvien2 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien2', '$id')" );
		} elseif ( $dienvien2 == ''
			and $ten_dienvien2 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien2'" );
		}
		if ( $dienvien3 != ''
			and $ten_dienvien3 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien3' WHERE idphim='$id' AND tendienvien='$ten_dienvien3'" );
		} elseif ( $dienvien3 != ''
			and $ten_dienvien3 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien3', '$id')" );
		} elseif ( $dienvien3 == ''
			and $ten_dienvien3 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien3'" );
		}

		if ( $dienvien4 != ''
			and $ten_dienvien4 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien4' WHERE idphim='$id' AND tendienvien='$ten_dienvien4'" );
		} elseif ( $dienvien4 != ''
			and $ten_dienvien4 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien4', '$id')" );
		} elseif ( $dienvien4 == ''
			and $ten_dienvien4 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien4'" );
		}

		if ( $dienvien5 != ''
			and $ten_dienvien5 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien5' WHERE idphim='$id' AND tendienvien='$ten_dienvien5'" );
		} elseif ( $dienvien5 != ''
			and $ten_dienvien5 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien5', '$id')" );
		} elseif ( $dienvien5 == ''
			and $ten_dienvien5 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien5'" );
		}

		if ( $dienvien6 != ''
			and $ten_dienvien6 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien6' WHERE idphim='$id' AND tendienvien='$ten_dienvien6'" );
		} elseif ( $dienvien6 != ''
			and $ten_dienvien6 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien6', '$id')" );
		} elseif ( $dienvien6 == ''
			and $ten_dienvien6 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien6'" );
		}

		if ( $dienvien7 != ''
			and $ten_dienvien7 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien7' WHERE idphim='$id' AND tendienvien='$ten_dienvien7'" );
		} elseif ( $dienvien7 != ''
			and $ten_dienvien7 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien7', '$id')" );
		} elseif ( $dienvien7 == ''
			and $ten_dienvien7 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien7'" );
		}

		if ( $dienvien8 != ''
			and $ten_dienvien8 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien8' WHERE idphim='$id' AND tendienvien='$ten_dienvien8'" );
		} elseif ( $dienvien8 != ''
			and $ten_dienvien8 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien8', '$id')" );
		} elseif ( $dienvien8 == ''
			and $ten_dienvien8 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien8'" );
		}

		if ( $dienvien9 != ''
			and $ten_dienvien9 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien9' WHERE idphim='$id' AND tendienvien='$ten_dienvien9'" );
		} elseif ( $dienvien9 != ''
			and $ten_dienvien9 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien9', '$id')" );
		} elseif ( $dienvien9 == ''
			and $ten_dienvien9 != '' ) {
			mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien9'" );
		}

		if ( $dienvien10 != ''
			and $ten_dienvien10 != '' ) {
			mysqli_query( $conn, "UPDATE dienvien SET tendienvien=N'$dienvien10' WHERE idphim='$id' AND tendienvien='$ten_dienvien10'" );
		} elseif ( $dienvien10 != ''
			and $ten_dienvien10 == '' ) {
			mysqli_query( $conn, "INSERT INTO dienvien (tendienvien, idphim) VALUES (N'$dienvien10', '$id')" );
		} elseif ( $dienvien10 == ''
				and $ten_dienvien10 != '' ) {
				mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id' AND tendienvien='$ten_dienvien10'" );
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

			//thêm vào bảng kichban
			if ( $kichban != ''
			and $tg_kichban != '' ) {
			mysqli_query( $conn, "UPDATE kichban SET kichban=N'$kichban' WHERE idphim='$id' AND kichban='$tg_kichban'" );
		} elseif ( $kichban != ''
			and $tg_kichban == '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban', '$id')" );
		} elseif ( $kichban == ''
			and $tg_kichban != '' ) {
			mysqli_query( $conn, "DELETE FROM kichban WHERE idphim='$id' AND kichban='$tg_kichban'" );
		}

		if ( $kichban1 != ''
			and $tg_kichban1 != '' ) {
			mysqli_query( $conn, "UPDATE kichban SET kichban=N'$kichban1' WHERE idphim='$id' AND kichban='$tg_kichban1'" );
		} elseif ( $kichban1 != ''
			and $tg_kichban1 == '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban1', '$id')" );
		} elseif ( $kichban1 == ''
			and $tg_kichban1 != '' ) {
			mysqli_query( $conn, "DELETE FROM kichban WHERE idphim='$id' AND kichban='$tg_kichban1'" );
		}

		if ( $kichban2 != ''
			and $tg_kichban2 != '' ) {
			mysqli_query( $conn, "UPDATE kichban SET kichban=N'$kichban2' WHERE idphim='$id' AND kichban='$tg_kichban2'" );
		} elseif ( $kichban2 != ''
			and $tg_kichban2 == '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban2', '$id')" );
		} elseif ( $kichban2 == ''
			and $tg_kichban2 != '' ) {
			mysqli_query( $conn, "DELETE FROM kichban WHERE idphim='$id' AND kichban='$tg_kichban2'" );
		}
		if ( $kichban3 != ''
			and $tg_kichban3 != '' ) {
			mysqli_query( $conn, "UPDATE kichban SET kichban=N'$kichban3' WHERE idphim='$id' AND kichban='$tg_kichban3'" );
		} elseif ( $kichban3 != ''
			and $tg_kichban3 == '' ) {
			mysqli_query( $conn, "INSERT INTO kichban (kichban, idphim) VALUES (N'$kichban3', '$id')" );
		} elseif ( $kichban3 == ''
			and $tg_kichban3 != '' ) {
			mysqli_query( $conn, "DELETE FROM kichban WHERE idphim='$id' AND kichban='$tg_kichban3'" );
		}
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

		//Chỉnh sửa dữ liệu bảng theloai
		if ( $theloai != ''
			and $ten_theloai != '' ) {
			mysqli_query( $conn, "UPDATE theloai SET tentheloai=N'$theloai', tentheloai_khongdau='$theloai_khongdau' WHERE idphim='$id' AND tentheloai='$ten_theloai'" );
		} elseif ( $theloai != ''
			and $ten_theloai == '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khondau, idphim) VALUES (N'$theloai', '$theloai_khongdau', '$id')" );
		} elseif ( $theloai == ''
			and $ten_theloai != '' ) {
			mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id' AND tentheloai='$ten_theloai'" );
		}

		if ( $theloai1 != ''
			and $ten_theloai1 != '' ) {
			mysqli_query( $conn, "UPDATE theloai SET tentheloai=N'$theloai1', tentheloai_khongdau='$theloai1_khongdau' WHERE idphim='$id' AND tentheloai='$ten_theloai1'" );
		} elseif ( $theloai1 != ''
			and $ten_theloai1 == '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai1', '$theloai1_khongdau', '$id')" );
		} elseif ( $theloai1 == ''
			and $ten_theloai1 != '' ) {
			mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id' AND tentheloai='$ten_theloai1'" );
		}

		if ( $theloai2 != ''
			and $ten_theloai2 != '' ) {
			mysqli_query( $conn, "UPDATE theloai SET tentheloai=N'$theloai2', tentheloai_khongdau='$theloai2_khongdau' WHERE idphim='$id' AND tentheloai='$ten_theloai2'" );
		} elseif ( $theloai2 != ''
			and $ten_theloai2 == '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai2', '$theloai2_khongdau', '$id')" );
		} elseif ( $theloai2 == ''
			and $ten_theloai2 != '' ) {
			mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id' AND tentheloai='$ten_theloai2'" );
		}
		if ( $theloai3 != ''
			and $ten_theloai3 != '' ) {
			mysqli_query( $conn, "UPDATE theloai SET tentheloai=N'$theloai3', 
			tentheloai_khongdau='$theloai3_khongdau' WHERE idphim='$id' AND tentheloai='$ten_theloai3'" );
		} elseif ( $theloai3 != ''
			and $ten_theloai3 == '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai3', '$theloai3_khongdau', '$id')" );
		} elseif ( $theloai3 == ''
			and $ten_theloai3 != '' ) {
			mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id' AND tentheloai='$ten_theloai3'" );
		}

		if ( $theloai4 != ''
			and $ten_theloai4 != '' ) {
			mysqli_query( $conn, "UPDATE theloai SET tentheloai=N'$theloai4', tentheloai_khongdau='$theloai4_khongdau' WHERE idphim='$id' AND tentheloai='$ten_theloai4'" );
		} elseif ( $theloai4 != ''
			and $ten_theloai4 == '' ) {
			mysqli_query( $conn, "INSERT INTO theloai (tentheloai, tentheloai_khongdau, idphim) VALUES (N'$theloai4', '$theloai4_khongdau', '$id')" );
		} elseif ( $theloai4 == ''
			and $ten_theloai4 != '' ) {
			mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id' AND tentheloai='$ten_theloai4'" );
		}


		//quay lại trang quản lý
		header( "location: ../../index.php?quanly=quanlyphim&ac=sua&id=$id" );
	} else echo( '<p>Dữ liệu không hợp lệ</p>' );
}
else {
	mysqli_query( $conn, "DELETE FROM phim WHERE idphim='$id'" );
	mysqli_query( $conn, "DELETE FROM daodien WHERE idphim='$id'" );
	mysqli_query( $conn, "DELETE FROM dienvien WHERE idphim='$id'" );
	mysqli_query( $conn, "DELETE FROM kichban WHERE idphim='$id'" );
	mysqli_query( $conn, "DELETE FROM theloai WHERE idphim='$id'" );
	mysqli_query( $conn, "DELETE FROM phimbo WHERE idphim='$id'" );
	//mysqli_query( $conn, "DROP TABLE binhluan_".$id);
	header( 'location: ../../index.php?quanly=quanlyphim&ac=danhsach' );
}
?>