<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>User MarketSolarExchange</title>
	<link rel="stylesheet" type="text/css" href="userpagemarketsolarexchange/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="UniversalAssets/img/homepic.png"/>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
	<script src="userpagemarketsolarexchange/dist/jautocalc.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>


	<script src="UniversalAssets/js/design/morris/raphael-2.1.0.min.js"></script>
    <script src="UniversalAssets/js/design/morris/morris.js"></script>
	<script src="UniversalAssets/js/design/easypiechart.js"></script>
	<script src="UniversalAssets/js/design/easypiechart-data.js"></script>
	<script src="UniversalAssets/js/design/Lightweight-Chart/jquery.chart.js"></script>

	<script src="UniversalAssets/js/proxymiddleware.js"></script>
	<script src="UniversalAssets/js/express.js"></script>	
	<script src="UniversalAssets/js/path.js"></script>
	<script src="UniversalAssets/js/open.js"></script>		
	
	<script src="UniversalAssets/js/symbol-sdk.js"></script>
	<script src="UniversalAssets/js/rxjs.js"></script>
	<script src="UniversalAssets/js/rxjs_operators.js"></script>
	
	<script src="UniversalAssets/js/textfunction.js"></script>
	<script src="UniversalAssets/js/wholesetfunction.js"></script>
	<script src="UniversalAssets/js/exchangemosiacbalance.js"></script>
	
	<script src="userpagemarketsolarexchange/js/createbuysell.js"></script>
	<script src="userpagemarketsolarexchange/js/listbuysellorder.js"></script>
	
</head>

<script>
	function run(){
		
		if(!alertify.errorAlert){
		  //define a new errorAlert base on alert
		  alertify.dialog('errorAlert',function factory(){
			return{
					build:function(){
						var errorHeader = '<span class="fas fa-bolt" '
						+    'style="vertical-align:middle;color:#C5B358;">'
						+ '</span> Solar Share Energy Exhange';
						this.setHeader(errorHeader);
					}
				};
			},true,'alert');
		}
		alertify
			.errorAlert(
			"<img style='max-width:85%' src='UniversalAssets/img/LogoSolarShare.png'/><br/><br/><h6>Welcome to the Energy Trading Exhange Center.</h6>Always remember to double-check your amount before buying/selling. Blockchain based transactions cannot be reversed.<br/><br/>"
			);
			  
	}
</script>
 
<body onload = "run();">
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
	
	
<div class="row" id="buyselltradehistory">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
  
		<div class="card-group">
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title" id="buy"><i class="fa fa-plus-circle" aria-hidden="true" style="margin-right:10px;"></i>BUY</h5>
			  <p class="card-text">Balance:<span id="bal_box"><span id = "account_bal_symbol"></span><span id= "symbol_text"> symbol.xym</span></span></p>
			
				<form id="buydash" autocomplete="off">
				  <div class="form-group row">
					<label for="electroamounttext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Amount:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="buy1" type="text" name="amount" class="form-control form-control-sm" oninput="calculatebuy()" placeholder="energy.vagabond" >
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="pricetext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Price:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="buy2" type="text" name="price" class="form-control form-control-sm" oninput="calculatebuy()" placeholder="symbol.xym" >
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="totalprice" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Total:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="buy3" type="text" name="total" class="form-control form-control-sm" placeholder="symbol.xym" readonly>
					</div>
				  </div>
					<p id ="curr_bal_symbol">[Current Balance]: <span id="curr_bal_buy_value"></span></p><br>
				  
					<p class="card-text"><small class="text-muted">* Levy fee is not included (symbol.xym)<br>* 1 kiloWatt-hour = 1 energy.vagabond
					</small></p>
			  
				  <div class="form-group row">
					<div class="col-sm-10">
					  <button type="submit" class="btn btn-primary" id="btn-buy">Buy</button>
					</div>
				  </div>
				</form>		
			</div>
		  </div>
		  
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title" id="sell"><i class="fa fa-minus-circle" aria-hidden="true" style="margin-right:10px;"></i>SELL</h5>
			  <p class="card-text">Balance:<span id="bal_box"><span id = "account_bal_vagabond"></span><span id= "vagabond_text"> energy.vagabond</span></span></p>
			  
				<form id="selldash" autocomplete="off">
				  <div class="form-group row">
					<label for="electroamounttext2" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Amount:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="sell1" type="text" name="amount" class="form-control form-control-sm" oninput="calculatesell()" placeholder="energy.vagabond" >
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="pricetext2" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Price:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="sell2" type="text" name="price" class="form-control form-control-sm" oninput="calculatesell()" placeholder="symbol.xym" >
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="totalprice2" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Total:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="sell3" type="text" name="total" class="form-control form-control-sm" placeholder="symbol.xym" readonly>
					</div>
				  </div>
				  
					<p id ="curr_bal_vagabond">[Current Balance]: <span id="curr_bal_sell_value1"></span></p><br>	
					
				  <p class="card-text"><small class="text-muted">* Levy fee is not included (symbol.xym)<br>* 1 kiloWatt-hour = 1 energy.vagabond</small></p>
				  
				  <div class="form-group row">
					<div class="col-sm-10">
					  <button type="submit" class="btn btn-primary" id="btn-sell">Sell</button>
					</div>
				  </div>
				</form>		
				  
			</div>
		  </div>
		</div>
		
		
		<div class="card-group">
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title" id="sellorder">SELL ORDER</h5>
			  <p class="card-text">UserAdmin's sell order list for selling energy.</p></br>
			  
			  
				<table id="sellordertable" style="width:100%">
					<thead>
						<tr id="orderheader">
							<th>Price</th>
							<th>Energy Amt.</th> 
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>
			  
			  
			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		  </div>
		  <div class="card">
			<div class="card-body">
			  <h5 class="card-title" id="buyorder">BUY ORDER</h5>
			  <p class="card-text">UserAdmin's buy order list to buy energy.</p></br>

				<table id="buyordertable" style="width:100%">
					<thead>
						<tr id="orderheader">
							<th>Price</th>
							<th>Energy Amt.</th> 
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>

			  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		  </div>
		</div>
		
	</div>
  
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
  
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title" id = "energytradingorder">ENERGY TRADING ORDER</h5>
			<p class="card-text">The trading--xem vs energy value.</p>
			
				<div class="wrapper">
					<div id="trader_buy">
						<div class="card bg-success text-white">
							<div class="card-body">ENERGY TRADER BUYING</div>
						</div>
						<table id="traderbuytable" style="width:100%">
						<thead>
							<tr id="traderheader">
								<th>Price</th>
								<th>Energy Amt.</th> 
								<th>Total</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="traderbuysellallorders">
						
						</tbody>
						</table>
					</div>
					
					<br></br>
					<br></br>
					
					<div id="trader_sell">
						<div class="card bg-danger text-white">
							<div class="card-body">ENERGY TRADER SELLING</div>
						</div>	
						<table id="traderselltable" style="width:100%">
						<thead>
							<tr id="traderheader">
								<th>Price</th>
								<th>Energy Amt.</th> 
								<th>Total</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="traderbuysellallorders">
						
						</tbody>
						</table>
					</div>
				</div>
			
		  </div>
		</div>
	
	</div>
</div>


	</div>

</body>
</html>