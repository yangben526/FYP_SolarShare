
var energyresourcesbuy;
var pricebuy;
var Totalforbuyorder;
var currentbuybalance;

var energyresourcessell;
var pricesell;
var Totalforsellorder;
var currentsellbalance;

function calculatebuy(){
	
    energyresourcesbuy = document.getElementById('buy1').value;
    pricebuy = document.getElementById('buy2').value; 
    document.getElementById('buy3').value = parseFloat(energyresourcesbuy)*parseFloat(pricebuy);
	Totalforbuyorder = Number(document.getElementById('buy3').value).toFixed(3);
	
	currentbuybalance = symbolmosaicamount - Totalforbuyorder;
	if(Totalforbuyorder > (symbolmosaicamount-10)){
		document.getElementById('curr_bal_buy_value').style.color="red";
		document.getElementById('curr_bal_buy_value').innerHTML = 'You do not have enough balance.';
		document.getElementById("btn-buy").disabled = true;
	}else{
		document.getElementById('curr_bal_buy_value').style.color="#A9A9A9";		
		document.getElementById('curr_bal_buy_value').innerHTML = currentbuybalance;
		document.getElementById("btn-buy").disabled = false;
	}

	
}

function calculatesell(){
		 
    energyresourcessell = document.getElementById('sell1').value;
    pricesell = document.getElementById('sell2').value; 
    document.getElementById('sell3').value = parseFloat(energyresourcessell)*parseFloat(pricesell);
	Totalforsellorder = Number(document.getElementById('sell3').value).toFixed(3);
	
	currentsellbalance = vagabondmosaicamount - Totalforsellorder;
	
	if(Totalforsellorder > (vagabondmosaicamount)){
		document.getElementById('curr_bal_sell_value').style.color="red";
		document.getElementById('curr_bal_sell_value').innerHTML = 'You do not have enough balance.';
		document.getElementById("btn-sell").disabled = true;
	}else{
		document.getElementById('curr_bal_sell_value').style.color="#A9A9A9";
		document.getElementById('curr_bal_sell_value').innerHTML = currentsellbalance;
		document.getElementById("btn-sell").disabled = false;
	}
	
}
