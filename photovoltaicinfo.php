<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Photovoltaic Info</title>
	<link rel="stylesheet" type="text/css" href="photovoltaicinfo/css/style.css">
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

	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

	<script src="photovoltaicinfo/js/solarpanelcoordinates.js"></script>
	<script src="photovoltaicinfo/js/solarmapmarkers.js"></script>
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
        <img src="UniversalAssets/img/avatar.png" class="profile_image" alt="">
        <h4>User Admin</h4>
      </center>
      <a href="http://localhost:8080/P2PTrading/UserpagewithServer.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="http://localhost:8080/P2PTrading/userpagemarketsolarexhange.php"><i class="fas fa-exchange-alt"></i><span>Energy Exchange</span></a>
      <a href="http://localhost:8080/P2PTrading/energydatadisplaypage.php"><i class="fas fa-th"></i><span>Energy Data</span></a>
      <a href="http://localhost:8080/P2PTrading/photovoltaicinfo.php"><i class="fas fa-solar-panel"></i><span>Photovoltaic Info</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    </div>
	
	
	
	<div class="content">
		<div class="head">
			<ol id="head_id" class="breadcrumb">
				<li><a href="http://localhost:8080/P2PTrading/userpagemarketsolarexhange.php">Energy Exchange</a></li>
				<li class="active">Photovoltaic Panels Locations</li>
			</ol> 
		</div>
	
	<!--The div element for the map -->
		<div id="map"></div>
	
	
	
	
	
	
		<script src="https://unpkg.com/@google/markerclustererplus@5.1.0/dist/markerclustererplus.min.js"></script>
		</script>
		
		<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxXRddz-69M0TPS9ed1o2rqGD5hxlOOmA&callback=initMap">
		</script>


	</div>

</body>
</html>