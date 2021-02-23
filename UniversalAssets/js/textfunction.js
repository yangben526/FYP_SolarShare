
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