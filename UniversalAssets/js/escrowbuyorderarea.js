	
const symbol_sdk_1 = require("/node_modules/symbol-sdk");
// replace with meta.networkGenerationHash (nodeUrl + '/node/info')
const networkGenerationHash = '1DFB2FAA9E7F054168B0C5FCB84F4DEB62CC2B4D317D861F3168D161F54EA78B';
// replace with node endpoint
const nodeUrl = 'http://api-01.ap-northeast-1.096x.symboldev.network:3000';
var symbolget;
var vagabondenergypay;


function valuebuydisplay(){

	document.getElementById('displaysell1').value = sessionStorage.getItem("energyamountfixed1");
	document.getElementById('displaysell2').value = sessionStorage.getItem("sellingpricefixed");
	document.getElementById('displaysell3').value = sessionStorage.getItem("totalcostfixed1");
	vagabondenergypay = document.getElementById('displaysell1').value;
	symbolget = document.getElementById('displaysell3').value;
}

function escrowtransactionsellenergy(){
	sendenergy();
	getsymbol();
	setTimeout(function(){self.close();}, 3000);
}

function sendenergy(){

	/* start block 01 */
	// replace with recipient address
	const rawAddress = 'TDE4ZHEF3ZPSCJIOURPAAMPFXJWQLJA4ZJF4T2I';
	const recipientAddress = symbol_sdk_1.Address.createFromRawAddress(rawAddress);
	// replace with network type
	const networkType = symbol_sdk_1.NetworkType.TEST_NET;
	// replace with mosaic id
	const networkCurrencyMosaicId = new symbol_sdk_1.MosaicId('0AACAB8D9822E2AD');
	// replace with network currency divisibility
	const networkCurrencyDivisibility = 0;
	const transferTransaction = symbol_sdk_1.TransferTransaction.create(symbol_sdk_1.Deadline.create(), recipientAddress, [new symbol_sdk_1.Mosaic(networkCurrencyMosaicId, symbol_sdk_1.UInt64.fromUint(vagabondenergypay * Math.pow(10, networkCurrencyDivisibility)))], symbol_sdk_1.PlainMessage.create('Fast Forward'), networkType, symbol_sdk_1.UInt64.fromUint(2000000));
	/* end block 01 */
	/* start block 02 */
	// replace with sender private key
	const privateKey = 'EB4EA1829A37858EFADCE83DCE85F434974284C95EA9A265F5A7337B6CB3500C';
	const account = symbol_sdk_1.Account.createFromPrivateKey(privateKey, networkType);

	const signedTransaction = account.sign(transferTransaction, networkGenerationHash);
	console.log('Payload:', signedTransaction.payload);
	console.log('Transaction Hash:', signedTransaction.hash);
	/* end block 02 */
	/* start block 03 */

	const repositoryFactory = new symbol_sdk_1.RepositoryFactoryHttp(nodeUrl);
	const transactionHttp = repositoryFactory.createTransactionRepository();
	transactionHttp
		.announce(signedTransaction)
		.subscribe((x) => console.log(x), (err) => console.error(err));
	/* end block 03 */	
	
}


function getsymbol(){
	
	/* start block 01 */
	// replace with recipient address
	const rawAddress = 'TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY';
	const recipientAddress = symbol_sdk_1.Address.createFromRawAddress(rawAddress);
	// replace with network type
	const networkType = symbol_sdk_1.NetworkType.TEST_NET;
	// replace with mosaic id
	const networkCurrencyMosaicId = new symbol_sdk_1.MosaicId('5E62990DCAC5BE8A');
	// replace with network currency divisibility
	const networkCurrencyDivisibility = 6;
	const transferTransaction = symbol_sdk_1.TransferTransaction.create(symbol_sdk_1.Deadline.create(), recipientAddress, [new symbol_sdk_1.Mosaic(networkCurrencyMosaicId, symbol_sdk_1.UInt64.fromUint(symbolget * Math.pow(10, networkCurrencyDivisibility)))], symbol_sdk_1.PlainMessage.create('Fast Forward'), networkType, symbol_sdk_1.UInt64.fromUint(2000000));
	/* end block 01 */
	/* start block 02 */
	// replace with sender private key
	const privateKey = '5EC6D8142AB24F6BE5C89DFAD0672AA9A3DD67CA5C8A8A0127571342CAEB58C1';
	const account = symbol_sdk_1.Account.createFromPrivateKey(privateKey, networkType);

	const signedTransaction = account.sign(transferTransaction, networkGenerationHash);
	console.log('Payload:', signedTransaction.payload);
	console.log('Transaction Hash:', signedTransaction.hash);
	/* end block 02 */
	/* start block 03 */

	const repositoryFactory = new symbol_sdk_1.RepositoryFactoryHttp(nodeUrl);
	const transactionHttp = repositoryFactory.createTransactionRepository();
	transactionHttp
		.announce(signedTransaction)
		.subscribe((x) => console.log(x), (err) => console.error(err));
	/* end block 03 */	
	
}

function submittodb(){
	document.getElementById("selldash").submit();
}

function myAjax() {
      $.ajax({
           method: "POST",
           url: 'transactiondatatodb2.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }