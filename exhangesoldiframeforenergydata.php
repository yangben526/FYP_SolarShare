<?php
include 'databaseinfo.php';

$conn = OpenCon();

$query = "SELECT * FROM soldenergytotrader";
$result = mysqli_query($conn,$query);

$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ Datetime:'".$row["DateTime"]."',Price:'".$row["Price"]."',Total:'".$row["Total"]."', EnergyAmt:".$row["EnergyAmt"]."}, ";
}

$chart_data = substr($chart_data, 0, -2);

CloseCon($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Sold Energy Exhange</title>
	<link rel="shortcut icon" type="image/x-icon" href="UniversalAssets/img/homepic.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
	
	<link rel="stylesheet" href="UniversalAssets/js/design/morris/morris-0.4.3.min.css">
	<link href="UniversalAssets/js/design/morris/morris-0.4.3.min.css" rel="stylesheet" />
		
	<script src="UniversalAssets/js/design/morris/raphael-2.1.0.min.js"></script>
    <script src="UniversalAssets/js/design/morris/morris.js"></script>
	<script src="UniversalAssets/js/design/easypiechart.js"></script>
	<script src="UniversalAssets/js/design/easypiechart-data.js"></script>
	<script src="UniversalAssets/js/design/Lightweight-Chart/jquery.chart.js"></script>
	
	<script src="energydatadisplaypage/js/dataenergyfunction.js"></script>
		
</head>


<body>


	<div class="col-xs-12 col-sm-12 col-md-12">
			<label class="label label-default" style="font-size:12px; cursor: pointer;" onclick="openenergysoldlist()" >Vagabond.energy - Symbol.xym / Exchange / SOLD</label>
			<div id="3rdbarcharttest" style="margin:30px 0px;"></div>
			<script>
				Morris.Bar({
					element: '3rdbarcharttest',
					data: [
					<?php echo $chart_data; ?>
					],
					xkey: 'Datetime',
					xLabels: 'week',
					xLabelAngle: '45',
					ykeys: ['EnergyAmt','Price','Total'],
					labels: ['Energy.vagabond','Price/vagabond','Total paid'],
					fillOpacity: '0.7',
					hideHover: 'auto',
					gridTextFamily: 'mtsRegular',
					resize: true,
					barColors: ['#7F00FF','#E75480','#B5651D']
					});						
			</script>					
	</div>

	
</body>
</html>