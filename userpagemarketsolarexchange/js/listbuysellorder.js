
var i = 0;
var pricebuy1 = [i];
var energyresourcesbuy1 = [i];
var Totalforbuyorder1 = [i];
var new_rowi = [i];

var j = 0;
var pricesell1 = [j];
var energyresourcessell1 = [j];
var Totalforsellorder1 = [j];
var new_rowj = [j];

$(document).ready(function(){

    $('#btn-buy').click(function() {
		if(energyresourcesbuy ==null && pricebuy==null){
			alert("Value Not Entered");
			return false;
		}
		else{
			document.getElementById('buydash').reset();
			
			new_row = "<tr><td>" + pricebuy + " <span style='color:#778899;'>symbol</span>" + "<br></td><td>" +energyresourcesbuy + " <span style='color:#778899;'>vagabond</span>" + "</td><td>" + Totalforbuyorder + " <span style='color:#778899;'>symbol</span>" + "</td></tr>";
			$('#buyordertable tbody').append(new_row);		
			
			pricebuy1[i] = pricebuy;
			energyresourcesbuy1[i] = energyresourcesbuy;
			Totalforbuyorder1[i] = Totalforbuyorder;

			new_rowi[i] = "<tr><td>" + pricebuy1[i] + " <span style='color:#778899;'>symbol.xym</span>" + "</td><td>" +energyresourcesbuy + " <span style='color:#778899;'>energy.vagabond</span>" + "</td><td>" + Totalforbuyorder + " <span style='color:#778899;'>symbol.xym</span>" + "</td><td><a href='#' style='color:red;' class='new_trader_sell'>SELL</a></td></tr>";
			$('#traderbuytable tbody').prepend(new_rowi[i]);
		
		
			console.log("BUY:","no.",i,"\nprice:",pricebuy1[i],"energy:",energyresourcesbuy1[i],"Total:",Totalforbuyorder1[i]);
			
			saveDataBuy();
			i++;
			
			$('.new_trader_sell').click(function() {				
			window.open('http://localhost:8080/P2PTrading/usertransactionpagesellordermarket.php','popUpWindow','height=500,width=400,left=100,top=100,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');			
			});		
			
			pricebuy=null;
			energyresourcesbuy=null;
			
			return false;
		}
	});
});

function saveDataBuy(){
	sessionStorage.setItem("buyingpricefixed",pricebuy1[i]);
	sessionStorage.setItem("energyamountfixed",energyresourcesbuy1[i]);
	sessionStorage.setItem("totalcostfixed",Totalforbuyorder1[i]);
}


$(document).ready(function(){
    $('#btn-sell').click(function() {
		if(energyresourcessell==null && pricesell==null){
			alert("Value Not Entered");
			return false;
		}
		else{
			document.getElementById('selldash').reset();
			
			var new_row = "<tr><td>" + pricesell + " <span style='color:#778899;'>symbol</span>" + "</td><td>" +energyresourcessell + " <span style='color:#778899;'>vagabond</span>" + "</td><td>" + Totalforsellorder + " <span style='color:#778899;'>symbol</span>" + "</td></tr>";
			$('#sellordertable tbody').append(new_row);
			
			pricesell1[j] = pricesell;
			energyresourcessell1[j] = energyresourcessell;
			Totalforsellorder1[j] = Totalforsellorder;
			
			new_rowj[j] = "<tr><td>" + pricesell1[j] + " <span style='color:#778899;'>symbol.xym</span>" + "</td><td>" + energyresourcessell1[j] + " <span style='color:#778899;'>energy.vagabond</span>" + "</td><td>" + Totalforsellorder1[j] + " <span style='color:#778899;'>symbol.xym</span>" + "</td><td><a href='#' style='color:green;' class='new_trader_buy'>BUY</a></td></tr>";
			$('#traderselltable tbody').append(new_rowj[j]);		
			
			
			console.log("SELL","no.",j,"\nprice:",pricesell1[i],"energy:",energyresourcessell1[j],"Total:",Totalforsellorder1[j]);
			
			saveDataSell();
			j++;	
			
			$('.new_trader_buy').click(function() {				
			window.open('http://localhost:8080/P2PTrading/usertransactionpagebuyordermarket.php','popUpWindow','height=500,width=400,left=100,top=100,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');			
			});				
			
			pricesell=null;
			energyresourcessell=null;
	
			return false;
		}
	});
});

function saveDataSell(){
	sessionStorage.setItem("sellingpricefixed",pricesell1[j]);
	sessionStorage.setItem("energyamountfixed1",energyresourcessell1[j]);
	sessionStorage.setItem("totalcostfixed1",Totalforsellorder1[j]);
}


