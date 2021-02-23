const symbol_sdk_1 = require("/node_modules/symbol-sdk");

var vagabondgetenergy;
var pricevaga;
var symbolpay;

function displayvagafree(){

	vagabondgetenergy = document.getElementById('getvaga1').value;
	
	var x = Math.floor((Math.random() * 10) + 1);
	document.getElementById("getvaga2").value = x;		
	pricevaga = document.getElementById('getvaga2').value;
	
	document.getElementById('getvaga3').value = parseFloat(vagabondgetenergy)*parseFloat(pricevaga);
	symbolpay = document.getElementById('getvaga3').value;

}

function OpenTrading(){
	getvagaenergy();
	paysymbolforenergy();
	setTimeout(function(){self.close();}, 3000);
}

function getvagaenergy(){

	/* start block 01 */
	// replace with recipient address
	const rawAddress = 'TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY';
	const recipientAddress = symbol_sdk_1.Address.createFromRawAddress(rawAddress);
	// replace with network type
	const networkType = symbol_sdk_1.NetworkType.TEST_NET;
	// replace with symbol.xym id
	const networkCurrencyMosaicId = new symbol_sdk_1.MosaicId('0AACAB8D9822E2AD');
	// replace with network currency divisibility
	const networkCurrencyDivisibility = 0;
	const transferTransaction = symbol_sdk_1.TransferTransaction.create(symbol_sdk_1.Deadline.create(), recipientAddress, [new symbol_sdk_1.Mosaic(networkCurrencyMosaicId, symbol_sdk_1.UInt64.fromUint(vagabondgetenergy * Math.pow(10, networkCurrencyDivisibility)))], symbol_sdk_1.PlainMessage.create('Fast Forward'), networkType, symbol_sdk_1.UInt64.fromUint(2000000));
	/* end block 01 */
	
	
	/* start block 02 */
	// replace with sender private key
	const privateKey = '5831820E6D83352023449029F9C91D831CAEF372EB53AE1E4E287A72BD9EB13A';
	const account = symbol_sdk_1.Account.createFromPrivateKey(privateKey, networkType);
	// replace with meta.networkGenerationHash (nodeUrl + '/node/info')
	const networkGenerationHash = '1DFB2FAA9E7F054168B0C5FCB84F4DEB62CC2B4D317D861F3168D161F54EA78B';
	const signedTransaction = account.sign(transferTransaction, networkGenerationHash);
	console.log('Payload:', signedTransaction.payload);
	console.log('Transaction Hash:', signedTransaction.hash);
	/* end block 02 */
	
	
	
	/* start block 03 */
	// replace with node endpoint
	const nodeUrl = 'http://api-01.ap-northeast-1.096x.symboldev.network:3000';
	const repositoryFactory = new symbol_sdk_1.RepositoryFactoryHttp(nodeUrl);
	const transactionHttp = repositoryFactory.createTransactionRepository();
	transactionHttp
		.announce(signedTransaction)
		.subscribe((x) => console.log(x), (err) => console.error(err));
	/* end block 03 */
	
	setTimeout(function(){self.close();}, 3000);
}

function paysymbolforenergy(){

	/* start block 01 */
	// replace with recipient address
	const rawAddress = 'TABBOH-RHFXWY-7W3N2J-2CRFIC-WZRVTU-POBFSF-5NI';
	const recipientAddress = symbol_sdk_1.Address.createFromRawAddress(rawAddress);
	// replace with network type
	const networkType = symbol_sdk_1.NetworkType.TEST_NET;
	// replace with symbol.xym id
	const networkCurrencyMosaicId = new symbol_sdk_1.MosaicId('5E62990DCAC5BE8A');
	// replace with network currency divisibility
	const networkCurrencyDivisibility = 6;
	const transferTransaction = symbol_sdk_1.TransferTransaction.create(symbol_sdk_1.Deadline.create(), recipientAddress, [new symbol_sdk_1.Mosaic(networkCurrencyMosaicId, symbol_sdk_1.UInt64.fromUint(symbolpay * Math.pow(10, networkCurrencyDivisibility)))], symbol_sdk_1.PlainMessage.create('Fast Forward'), networkType, symbol_sdk_1.UInt64.fromUint(2000000));
	/* end block 01 */
	
	
	/* start block 02 */
	// replace with sender private key
	const privateKey = 'EB4EA1829A37858EFADCE83DCE85F434974284C95EA9A265F5A7337B6CB3500C';
	const account = symbol_sdk_1.Account.createFromPrivateKey(privateKey, networkType);
	// replace with meta.networkGenerationHash (nodeUrl + '/node/info')
	const networkGenerationHash = '1DFB2FAA9E7F054168B0C5FCB84F4DEB62CC2B4D317D861F3168D161F54EA78B';
	const signedTransaction = account.sign(transferTransaction, networkGenerationHash);
	console.log('Payload:', signedTransaction.payload);
	console.log('Transaction Hash:', signedTransaction.hash);
	/* end block 02 */
	

	/* start block 03 */
	// replace with node endpoint
	const nodeUrl = 'http://api-01.ap-northeast-1.096x.symboldev.network:3000';
	const repositoryFactory = new symbol_sdk_1.RepositoryFactoryHttp(nodeUrl);
	const transactionHttp = repositoryFactory.createTransactionRepository();
	transactionHttp
		.announce(signedTransaction)
		.subscribe((x) => console.log(x), (err) => console.error(err));
	/* end block 03 */
	
}