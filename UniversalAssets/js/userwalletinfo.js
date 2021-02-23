		
		const nem = require ("/node_modules/symbol-sdk");
		
		
		const nodeURL ='http://api-01.ap-northeast-1.096x.symboldev.network:3000';
		const profileAddress ='TABBOH-RHFXWY-7W3N2J-2CRFIC-WZRVTU-POBFSF-5NI';
		const solarAddress ='TDJB5LTMX44AY7O2FHSNEXQGBDBHNHZCEIW222Y';

		const accountHttp= new nem.AccountHttp(nodeURL);
		const address = nem.Address.createFromRawAddress(profileAddress);
		const address1 = nem.Address.createFromRawAddress(solarAddress);
		

		accountHttp.getAccountInfo(address).subscribe(
         accountInfo => {
             $("#account_address").text(accountInfo.address.address );
			 $("#account_pubkey").text(accountInfo.publicKey);
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