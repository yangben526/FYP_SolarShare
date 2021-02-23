<?php
include 'databaseinfo.php';

$conn = OpenCon();

$query = "SELECT * FROM boughtenergyfromtrader";
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
	<title>Energy Data Display</title>
	<link rel="stylesheet" type="text/css" href="energydatadisplaypage/css/style.css">
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

    <input type="checkbox" id="check">
	
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
		<h3>Solar<span><</span>><span>Share</span></h3>
      </div>
      <div class="right_area">
        <button onclick="location.href='http://localhost:8080/P2PTrading/homepage2.php';" class="logoutbtn">Logout <i class="fas fa-power-off"></i></button>
      </div>
    </header>
    <!--header area end-->
	
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="userpagewithserver/img/avatar.png" class="profile_image" alt="">
        <h4>User Admin</h4>
      </center>
      <a href="http://localhost:8080/P2PTrading/UserpagewithServer.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="http://localhost:8080/P2PTrading/userpagemarketsolarexhange.php"><i class="fas fa-exchange-alt"></i><span>Energy Exchange</span></a>
      <a href="http://localhost:8080/P2PTrading/energydatadisplaypage.php"><i class="fas fa-th"></i><span>Energy Data</span></a>
      <a href="http://localhost:8080/P2PTrading/photovoltaicinfo.php"><i class="fas fa-solar-panel"></i><span>Photovoltaic Info</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    </div>
    <!--sidebar end-->	
	
	<div class="content">	
		<div class="head">
			<ol id="head_id" class="breadcrumb">
				<li><a href="http://localhost:8080/P2PTrading/userpagemarketsolarexhange.php">Energy Exchange</a></li>
				<li class="active">Energy Data</li>
			</ol> 
		</div>
			<div class="jumbotron jumbotronhigh">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12"> 
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"> 
							<iframe src="http://explorer-96x.symboldev.network/account/TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY" style="border:none; height:1000px; width:100%; overflow: hidden;" readonly></iframe>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"> 	
							<div class="cardlinegraph">
								<label class="label label-primary" style="font-size:12px; cursor: pointer;" onclick="openenergyboughtlist()">Vagabond.energy - Symbol.xym / Exchange / BOUGHT</label>
								<div id="barcharttest" style="margin:40px 0px;"></div>
								<script>
									Morris.Bar({

									element: 'barcharttest',
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
									barColors: ['#FF8C00','#008080','#7F00FF']
									});
										
								</script>
								<iframe src="http://localhost:8080/P2PTrading/exhangesoldiframeforenergydata.php" style="border:none; height:500px; width:100%;" readonly></iframe>	
							</div>
						</div> 
					</div>	
				</div>
			</div>	
	</div>
	
</body>
</html>