
 const nem = require ("/node_modules/nem2-sdk");
 const hd = require ("/node_modules/nem2-hd-wallets");
 const qr = require ("/node_modules/nem2-qr-library");


 const mnemonic = hd.MnemonicPassPhrase.createRandom('english');
 const exportMnemonic = new qr.MnemonicQR( mnemonic,"password", nem.NetworkType.MIJIN_TEST,'no-chain-id');

 const base64=exportMnemonic.toBase64()
	.subscribe((x) => {
     $ ('#item1').attr('src',x);
     $ ('#item2').text(mnemonic.plain );
	});
