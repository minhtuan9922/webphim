<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$ngay = date("Y-m-d");
	$d=strtotime("-1 day");
	$homqua = date("Y-m-d", $d);
	$query = mysqli_query($conn, "SELECT * FROM luotxem WHERE ngay='$ngay'");
	$num = mysqli_num_rows($query);
	if($num == 0)
	{
		$i=1;
		while (1){
			$d=strtotime("-".$i." day");
			$homqua = date("Y-m-d", $d);
			$qr = mysqli_query($conn, "SELECT * FROM luotxem WHERE ngay='$homqua'");
			$nu = mysqli_num_rows($qr);
			if($nu != 0) break;
			$i++;
		}
		$d_qr = mysqli_fetch_array($qr);
		$tong = $d_qr['tong'];
		$tong++;
		$luotxem = 1;
		mysqli_query( $conn, "INSERT INTO luotxem (ngay, luotxem, tong) VALUES ('$ngay', '$luotxem', '$tong')" );
	}
	else
	{
		$d_qr = mysqli_fetch_array($query);
		$tong = $d_qr['tong'];
		$tong++;
		$luotxem = $d_qr['luotxem'];
		$luotxem++;
		mysqli_query( $conn, "UPDATE luotxem SET luotxem='$luotxem', tong='$tong' WHERE ngay = '$ngay'" );
	}
?>