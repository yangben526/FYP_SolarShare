<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Vagabond.energy myfaucet</title>
	<link rel="shortcut icon" type="image/x-icon" href="usertransactionpagesellordermarket/img/homepic.png"/>
	
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
	
	<script src="UniversalAssets/js/symbol-sdk.js"></script>
	<script src="UniversalAssets/js/rxjs.js"></script>
	<script src="UniversalAssets/js/rxjs_operators.js"></script>
	<script src="UniversalAssets/js/getvagafree.js"></script>
	
</head>
<style>

	body::-webkit-scrollbar{
		width: 0.2rem;
	}

	body::-webkit-scrollbar-track{
		background: #1e1e24;
	}

	body::-webkit-scrollbar-thumb{
		background: #6649b8;
	}
	
	#vagabondgetfree{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;		
	}
	
	#vagatext{
		position: absolute;
		right: 7px;
		bottom: 0;
		font-size: 10px;
	}
	
	#energygetfree{
	border: none;
	margin: 0px 20px;
	color: black;
	padding: 7px 7px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 9.5px;
	border-radius: 25px;
	position: absolute;
    right:  0;
	bottom: 0;
	cursor: pointer;
	}
	
	#energygetfree:hover{
	box-shadow: 0px 0px 0px 8px rgba(0,0,0,0.3); 
	opacity: 0.5;
	}
	
</style>
<script>
	function notification(){
		alertify.set('notifier','position', 'top-right');
		alertify.notify('Transaction Confirmed', 'success', 5);
	}
</script>

<body>

		  <div style="background-image:url(UniversalAssets/img/sunback.png); color:white;" class="card">
			<div class="card-body">
				<img style="max-width:40%" src="UniversalAssets/img/LogoSolarShare.png"></img>
			  
				<form autocomplete="off" action="energygetfreetodb.php" method="post">
				  <div class="form-group row">
					<label for="electroamounttext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Amount:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="getvaga1" type="text" name="amount" class="form-control form-control-sm" oninput="displayvagafree()" placeholder="vagabond.energy">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="pricetext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Price: <span style="color:#ffcccb;">FREE For Demo purposes**</span></label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="getvaga2" type="text" name="price" class="form-control form-control-sm" oninput="displayvagafree()" placeholder="Depending On solar panel/energy generation">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="totalprice" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Total:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="getvaga3" type="text" name="total" class="form-control form-control-sm" placeholder="Symbol.xym" >
					</div>
				  </div>
			  
					<p class="card-text"><small class="text-info">* 1 kiloWatt-hour = 1 energy.vagabond
					</small></p>
			  
				  <div class="form-group row">
					<div class="col-sm-10">
					  <a class="btn btn-transaction" id="vagabondgetfree" name="transactionbtn" onclick="OpenTrading(); notification();" >BUY Vagabond.energy</a>
					  <input type="submit" id ="energygetfree" name="Submit" value="Submit To Database">
					</div>
				  </div>
				</form>		
			</div>
			<h5 id="vagatext">Vagabond.energy@Faucet</h5>
		  </div>

</body>
</html>