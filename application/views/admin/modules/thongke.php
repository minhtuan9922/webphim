<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$ngay = date("Y-m-d");
	$d=strtotime("-30 day");
	$bamuoingay = date("Y-m-d", $d);
	$query = mysqli_query($conn, "SELECT * FROM luotxem WHERE ngay BETWEEN '$bamuoingay' AND '$ngay'");
	$qr = mysqli_query($conn, "SELECT * FROM luotxem WHERE ngay='$ngay'");
	$d_qr = mysqli_fetch_array($qr);
	$tong = $d_qr['tong'];
?>
<center>
<?php echo('<p>Tổng lượt xem: '.$tong.'</p>'); ?>
<div id="curve_chart" style="width: 100%; height: 500px"></div>
</center>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
		['Ngày', 'Lượt xem'],
		<?php
			while($luotxem = mysqli_fetch_array($query))
			{
		?>
		['<?php echo($luotxem['ngay']); ?>',  <?php echo($luotxem['luotxem']); ?>],
		<?php
			}
		?>
		]);
		var options = {
		title: 'Thống kê lượt xem',
		curveType: 'function',
		legend: { position: 'bottom' }
		};

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
</script>
