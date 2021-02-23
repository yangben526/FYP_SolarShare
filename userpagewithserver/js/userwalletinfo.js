		
		const nem = require ("/node_modules/symbol-sdk");
		
		
		const nodeURL ='http://api-01.ap-northeast-1.096x.symboldev.network:3000';
		const meterAddress ='TCTPNFX6WGN4HG42IQWHCN2WZDXKFVQ2CB3AW7Q';
		const solarAddress ='TABBOH-RHFXWY-7W3N2J-2CRFIC-WZRVTU-POBFSF-5NI';
		const accountAddress = 'TCXCA4IQ6JIFZCWEAPLFCERSWL2MSTTXZABR7ZY';
 
		const accountHttp= new nem.AccountHttp(nodeURL);
		const address = nem.Address.createFromRawAddress(meterAddress);
		const address1 = nem.Address.createFromRawAddress(solarAddress);
		const address2 = nem.Address.createFromRawAddress(accountAddress);
		

		accountHttp.getAccountInfo(address).subscribe(
         accountInfo => {
			 $("#meter_address0").text(accountInfo.address.address );
             $("#meter_address").text(accountInfo.address.address );
			 $("#meter_pubkey").text(accountInfo.publicKey);
             console.log(address);
         },
         err => console .error ( err )
		);		
		
		accountHttp.getAccountInfo(address1).subscribe(
         accountInfo => {
             $("#solar_address").text(accountInfo.address.address );
			 $("#solar_pubkey").text(accountInfo.publicKey);
             console.log(address1);
         },
         err => console .error ( err )
		);		
		
		accountHttp.getAccountInfo(address2).subscribe(
         accountInfo => {
             $("#acc_address").text(accountInfo.address.address );
			 $("#acc_pubkey").text(accountInfo.publicKey);
             console.log(address);
         },
         err => console .error ( err )
		);		