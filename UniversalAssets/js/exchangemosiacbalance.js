var nem = require('/node_modules/symbol-sdk');
var operators = require('/node_modules/rxjs/operators');
let url = 'http://api-01.ap-northeast-1.096x.symboldev.network:3000';

/*
const express = require('/node_modules/express');
const { createProxyMiddleware } = require('/node_modules/http-proxy-middleware');
const jsonPlaceholderProxy = createProxyMiddleware({
  target: url,
  changeOrigin: true, // for vhosted sites, changes host header to match to target's host
  logLevel: 'debug',
});
const app = express();

app.use('/P2PTrading', jsonPlaceholderProxy);

app.listen(8080);

console.log('[DEMO] Server: listening on port 8080');
console.log('[DEMO] Opening: http://localhost:8080/P2PTrading');

require('/node_modules/open')('http://localhost:8080/P2PTrading');
*/


const id = '0AACAB8D9822E2AD';
const mosaicId = new nem.MosaicId(id);
const mosaiC = new nem.Mosaic(mosaicId);

var symbolmosaicamount;
var vagabondmosaicamount;

/*
const mosaicAmountview = new MosaicAmountView(mosaicInfo,Amount);
*/

const accountHttp = new nem.AccountHttp(url);
const mosaicHttp = new nem.MosaicHttp(url);
const mosaicService = new nem.MosaicService(accountHttp, mosaicHttp);
const address = nem.Address.createFromRawAddress("TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY");

mosaicService
    .mosaicsAmountViewFromAddress(address)
    .pipe(operators.mergeMap((_) => _))
    .subscribe((mosaic) => {
	$("#account_bal_symbol").text(Number(mosaic.relativeAmount()).toFixed(2));
	symbolmosaicamount = mosaic.relativeAmount();
	document.getElementById('curr_bal_buy_value').innerHTML = symbolmosaicamount;
	},
	err => console.error(err));

mosaicService
    .mosaicsAmountViewFromAddress(address)
    .pipe(operators.mergeMap((_) => _))
    .subscribe((mosaic) => {
	$("#account_bal_vagabond").text(Number(mosaic.relativeAmount()).toFixed(2));
	vagabondmosaicamount = mosaic.relativeAmount();
	document.getElementById('curr_bal_sell_value').innerHTML = vagabondmosaicamount;
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


		
		