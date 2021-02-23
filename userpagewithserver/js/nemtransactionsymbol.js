function OpenTrading(){
	OpenTradePrompt();
	
	const symbol_sdk_1 = require("/node_modules/symbol-sdk");

	/* start block 01 */
	// replace with recipient address
	const rawAddress = 'TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY';
	const recipientAddress = symbol_sdk_1.Address.createFromRawAddress(rawAddress);
	// replace with network type
	const networkType = symbol_sdk_1.NetworkType.TEST_NET;
	// replace with mosaic id
	const networkCurrencyMosaicId = new symbol_sdk_1.MosaicId('0AACAB8D9822E2AD');
	// replace with network currency divisibility
	const networkCurrencyDivisibility = 0;
	const transferTransaction = symbol_sdk_1.TransferTransaction.create(symbol_sdk_1.Deadline.create(), recipientAddress, [new symbol_sdk_1.Mosaic(networkCurrencyMosaicId, symbol_sdk_1.UInt64.fromUint(5 * Math.pow(10, networkCurrencyDivisibility)))], symbol_sdk_1.PlainMessage.create('Fast Forward'), networkType, symbol_sdk_1.UInt64.fromUint(2000000));
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

}