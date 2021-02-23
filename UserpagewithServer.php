<?php
include 'databaseinfo.php';

$conn = OpenCon();

$query = "SELECT * FROM buyfromsolar";
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
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="userpagewithserver/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="UniversalAssets/img/homepic.png"/>
	
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	
	<link rel="stylesheet" href="userpagewithserver/js/design/morris/morris-0.4.3.min.css">
	<link href="userpagewithserver/js/design/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	
	<script src="userpagewithserver/js/design/morris/raphael-2.1.0.min.js"></script>
    <script src="userpagewithserver/js/design/morris/morris.js"></script>
	<script src="userpagewithserver/js/design/easypiechart.js"></script>
	<script src="userpagewithserver/js/design/easypiechart-data.js"></script>
	<script src="userpagewithserver/js/design/Lightweight-Chart/jquery.chart.js"></script>
	
	
	<script src="userpagewithserver/js/dashboardfunction.js"></script>
	<script src="userpagewithserver/js/wholesetfunction.js"></script>	
	<script src="userpagewithserver/js/symbol-sdk.js"></script>
	<script src="userpagewithserver/js/rxjs.js"></script>
	<script src="userpagewithserver/js/rxjs_operators.js"></script>
	<script src="userpagewithserver/js/userwalletinfo.js"></script>
	<script src="userpagewithserver/js/exchangemosiacbalancetwo.js"></script>
	<script src="userpagewithserver/js/metergetvagaenergy.js"></script>	
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
		<div class="jumbotron jumbotron-fluid">
			<div class="container"> 
				<div class="row">
					<div class="userpage">
						<h1 class="welcometext" style="font-size:46px"><i class="fas fa-leaf"></i> ENERGY DASHBOARD</h1>
						<p class="usertext" style="font-size:15px">Welcome back, <b id="useradmin">USER ADMIN</b> <i class="fas fa-user"></i></p> 
						<a class="btn btn-vagabondget" href="#" onclick="vagabondcustomfaucet()"><i class="fas fa-bolt"></i> Vagabond.energy</a>
						<a class="btn btn-symbolget" href="#" onclick="symbolfaucetopenfunction()"><i class="fas fa-funnel-dollar"></i> Symbol.xym</a>	
						<p id="opentradeprompt"></p>
					</div>

					<div class="userpage2">
						<h2 class="billtext" style="font-family:Copperplate; color: purple;"><i class="fas fa-wallet" style="color: purple;"></i> BALANCE: <span style="font-size:14px;">Symbol.xym and Vagabond.energy</span></h2>
							<div id="iframediv" style="border: 2px solid #D5CC5A; overflow: hidden; margin: 15px auto; max-width: 581px;">
							<iframe id="iframebal" scrolling="no" src="http://explorer-96x.symboldev.network/account/TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY" style="border: 0px none; margin-left: -36px; height: 775px; margin-top: -600px; width: 650px; pointer-events: none;" readonly>
							</iframe>
							</div>
							
<!--						
						<?php
							while($row = $result->fetch_assoc())
							{
						?>
								<h3 class="amountbill" style="font-size:150px;">
								<?php echo $row['amount'];?>
								<sub id="xem" style="font-size:12px" style="font-family:Perpetua;">XEM.NEM</sub></h3>
								
						<?php
							}
						
						?>
-->
						
					</div>
				</div>
			</div>
		</div>
		
			<div class="jumbotron jumbotronhigh">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12"> 
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"> 
							<div class="cirStats">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="col-xs-12 col-sm-12 col-md-12"> 
												<div class="cardlinegraph1 text-center">
												
													<p id="energymeterprofiletext"
													><i class="fas fa-tachometer-alt" style="color:#67C69D; font-size:20px;"></i> ENERGY METER PROFILE	:</p><br>
													<p id="meteraddresspart">[ ADDRESS ]:<br><span id = "meter_address0"></span></br></p>
													
													<p id="meteraddresslocation">[ LOCATION ADDRESS ]:<br>
													<span id = "location_address">34 Jalan Green Hall Georgetown 10200 Pulau Pinang</span>
													<i class="fas fa-home" id="address_icon"></i>
													</br></p>
													
													<div>
													<input type="text" autocomplete="off" id="vagatopupmeter" placeholder="Enter energy amount">
													<button id="TopUpbtn" onclick="TopupOpen();" >Top Up Energy</button>
													<br>
													</div>
												</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12"> 
												<div class="cardlinegraph text-center">
													<h4 id="redeemedenergytext"><i class="fas fa-tachometer-alt" style="color:#FEE12B; font-size:20px;"></i> redeemed energy</h4>
													<p><span id="metertextvaga">Vagabond.energy: </span><span id='meter_vagabond'></span></p>
												</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										
											<div class="cardlinegraph2">
											<label class="label label-danger" style="font-size:15px;"><i class="fas fa-bolt" style="vertical-align:middle;color:#FFFF00;"></i> Energy Quota Usage</label>
											<div class="card-image">
												<div id="morris-donut-chart"></div>
											</div> 

											<script>
												<?php $randomenergyused = rand(0,100); ?>
											Morris.Donut({
												element: 'morris-donut-chart',
												data: [
												{label: 'Energy Consumed', value: <?php echo($randomenergyused) ?> },
												{label: 'Available Energy', value: <?php echo(100 - $randomenergyused) ?>}
												],
												resize: true,
												labelColor: 'black',
												colors: [
												'#E3242B',
												'#67C69D'
												],
												formatter: function (x) { return x + "%"}
												}).on('click', function(i, row){
												console.log(i, row);
											});												
															
											</script>
											</div>	
										
									</div>	
								</div>	
							</div> 
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"> 
							<div class="row">
								
									<div class="cardlinegraph3">
										<label class="label label-success">Vagabond.energy / SOLAR / BOUGHT</label>
										<div id="barcharttest"></div>

										<script>
										Morris.Bar({

										  element: 'barcharttest',
										  data: [
											<?php echo $chart_data; ?>
										  ],
										  xkey: 'Datetime',
										  xLabels: 'month',
										  xLabelAngle: '45',
										  ykeys: ['EnergyAmt'],
										  labels: ['Energy.vagabond'],
										  fillOpacity: '0.7',
										  hideHover: 'auto',
										  gridTextFamily: 'mtsRegular',
										  resize: true,
										  barColors: ['#FF8C00']
										});
										
										</script>
									</div>
								
							</div>
						</div> 
					</div>	
				</div>
			</div>
		
		<div class="jumbotron jumbotronmid">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="cardlinegraph2nd">
					<label class="label label-info">Vagabond-Energy Consumption / Monthly</label>
						<div id="2ndbarcharttest"></div>
					<script>
						Morris.Bar({

							element: '2ndbarcharttest',
							data: [
								{ y: 'JAN', a:<?php echo(rand(120,300)); ?>},						
								{ y: 'FEB', a:<?php echo(rand(120,300)); ?>},
								{ y: 'MAR', a:<?php echo(rand(120,300)); ?>},
								{ y: 'APR', a:<?php echo(rand(120,300)); ?>},
								{ y: 'MAY', a:<?php echo(rand(120,300)); ?>},
								{ y: 'JUNE', a:<?php echo(rand(120,300)); ?>},
								{ y: 'JULY', a:<?php echo(rand(120,300)); ?>},
								{ y: 'AUG', a:<?php echo(rand(120,300)); ?>},
								{ y: 'SEP', a:<?php echo(rand(120,300)); ?>},
								{ y: 'OCT', a:<?php echo(rand(120,300)); ?>},
								{ y: 'NOV', a:<?php echo(rand(120,300)); ?>},
								{ y: 'DEC', a:<?php echo(rand(120,300)); ?>}
							],
							xkey: 'y',
							xLabels: 'month',
							xLabelAngle: '45',
							ykeys: ['a'],
							labels: ['Energy Usage'],
							fillOpacity: '0.7',
							hideHover: 'auto',
							gridTextFamily: 'mtsRegular',
							resize: true,
							barColors: ['#228B22']
						});
										
					</script>					
				</div>
			</div>		
			
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="cardlinegraph3rd">
					<label class="label label-default">Symbol.xym / SOLAR / BOUGHT</label>
						<div id="3rdbarcharttest"></div>
					<script>
						Morris.Area({

							element: '3rdbarcharttest',
							data: [
							<?php echo $chart_data; ?>
							],
							xkey: 'Datetime',
							xLabels: 'day',
							xLabelAngle: '45',
							ykeys: ['Price','Total'],
							labels: ['Price/Vagabond unit','Total'],
							fillOpacity: '0.7',
							hideHover: 'auto',
							gridTextFamily: 'mtsRegular',
							pointFillColors: ['#ffffff'],
							pointStrokeColors: ['#7F00FF','#E75480'],
							resize: true,
							lineColors: ['#7F00FF','#E75480']
						});
										
					</script>					
				</div>
			</div>		
		</div>
		
		<div class="jumbotron jumbotronlow">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12"> 
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div id = "wallet_profile" >
						
								<ul>
								<p style="text-decoration:underline;">User Wallet Profile<a class="btn btn-checktransachistory" onclick="boughtsolarhistory()">Purchase History</a></p>
								<p id="demo" ></p>
								<p> [ADDRESS]: <span id = "acc_address"> </span> </p>
								<p> [PUBLIC KEY]: <span id = "acc_pubkey"> </span> </p>
								</ul>
							
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6"> 
							<div id = "Solar_profile" >
						
								<ul>
								<p style="text-decoration:underline;">Solar Profile <a class="btn btn-solarlist" onclick="solarlisting()">Solar List</a></p>
								<p> [ADDRESS]: <span id = "solar_address"></span></p>
								<p> [PUBLIC KEY]: <span id = "solar_pubkey"></span></p>
								</ul>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>