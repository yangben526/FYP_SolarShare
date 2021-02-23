<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>User Transaction</title>
	<link rel="stylesheet" type="text/css" href="usertransactionpagebuyordermarket/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="usertransactionpagebuyordermarket/img/homepic.png"/>
	
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
	
	<script src="UniversalAssets/js/escrowbuyorderarea.js"></script>	
	
	
</head>

<script>
	function notification(){
		alertify.set('notifier','position', 'bottom-left');
		alertify.notify('Transaction Confirmed', 'success', 5);
	}
</script>

<body onload = "valuebuydisplay()" >

		  
			<div class="card-body">
			  <h5 class="card-title" id="buy" style="color:green;"><i class="fa fa-plus-circle" aria-hidden="true" style="margin-right:10px; color:green;"></i>BUY</h5>
			  <div class="right-logo">
				<h3>Solar<span><</span>><span>Share</span></h3>
			  </div>
				<form id="buydash" autocomplete="off" action="transactiondatatodb2.php" method="post">
				  <div class="form-group row">
					<label for="electroamounttext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Amount:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="displaysell1" type="text" name="amount" class="form-control form-control-sm" placeholder="" readonly>
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="pricetext" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Price:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="displaysell2" type="text" name="price" class="form-control form-control-sm" placeholder="" readonly>
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="totalprice" class="col-xs-4 col-sm-6 col-md-4 col-form-label-sm">Total:</label>
					<div class="col-xs-8 col-sm-6 col-md-8">
					  <input id="displaysell3" type="text" name="total" class="form-control form-control-sm" placeholder="" readonly>
					</div>
				  </div>
			  
					<p class="card-text"><small class="text-muted">* Levy fee is not included (symbol.xym)<br>* 1 kiloWatt-hour = 1 energy.vagabond
					</small></p>
					<br>
			  
				  <div class="form-group row">
					<div class="col-sm-10">
					  <a class="btn btn-transaction" id="giveticket" name="transactionbtn" onclick="escrowtransactionsellenergy(); notification();">BUY ENERGY</a>
					  <input type="submit" id ="giveticketsubmitdb" name="Submit" value="Submit To Database">
					</div>
				  </div>
				</form>		
			</div>
		

</body>

</html>