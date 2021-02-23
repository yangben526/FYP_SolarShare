
const operators = require('/node_modules/rxjs/operators');
let url = 'http://api-01.ap-northeast-1.096x.symboldev.network:3000';


const id = '0AACAB8D9822E2AD';
const mosaicId = new nem.MosaicId(id);
const mosaiC = new nem.Mosaic(mosaicId);

var symbolmosaicamountmeter;
var vagabondmosaicamountmeter;


const mosaicHttp = new nem.MosaicHttp(url);
const mosaicService = new nem.MosaicService(accountHttp, mosaicHttp);

mosaicService
    .mosaicsAmountViewFromAddress(address)
    .pipe(operators.mergeMap((_) => _))
    .subscribe((mosaic) => {
	$("#meter_vagabond").text(Number(mosaic.relativeAmount()).toFixed(2));
	vagabondmosaicamountmeter = mosaic.relativeAmount();
	document.getElementById('meter_symbol1').innerHTML = vagabondmosaicamountmeter;
	},
	err => console.error(err));


	
mosaicService
    .mosaicsAmountViewFromAddress(address)
    .pipe(
        operators.mergeMap((_) => _)
    )
    .subscribe(mosaic => 
	console.log('\n\nYou have', mosaic.relativeAmount(), mosaic.fullName(),'\n\n'),
        err => console.error(err));


		
		
		