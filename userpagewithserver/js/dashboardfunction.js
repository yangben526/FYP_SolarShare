
var tradenumber=0;

function OpenTradePrompt() {
  var a = document.getElementById("opentradeprompt");
  var Opentradingcall= "Opening Transaction No.";

	  tradenumber++;
	  a.innerHTML = Opentradingcall + tradenumber;
}

function Checktradingstate(){
}

function transactiontesting(){
  var b = document.getElementById("demo");

  if(b.innerHTML == ""){
	  b.innerHTML = "Opening Balance receipt..";
  }else{
	  b.innerHTML = "";
  }
}

function symbolfaucetopenfunction(){				

	window.open('http://faucet-96x-01.symboldev.network/','popUpWindow','height=500,width=400,left=100,top=100,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');		
	
}	

function vagabondcustomfaucet(){				

	window.open('http://localhost:8080/P2PTrading/userpagevagabondget.php','popUpWindow','height=470,width=400,left=100,top=100,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');		
	
}	

function boughtsolarhistory(){				

	window.open('http://localhost:8080/P2PTrading/buyfromsolar.php','popUpWindow','height=800,width=1100,left=100,top=100,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');		
	
}

function solarlisting(){				

	window.open('http://localhost:8080/P2PTrading/solarpanellist.php','popUpWindow','height=470,width=1100,left=100,top=100,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no,status=no,resizable=yes');		
	
}