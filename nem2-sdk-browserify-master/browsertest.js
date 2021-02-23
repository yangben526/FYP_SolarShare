 src = "https://s3-ap-northeast-1.amazonaws.com/xembook.net/nem2-sdk/nem2-sdk-0.14.1.js" 
 
 const nem = require ("/node_modules/nem2-sdk");
 const RECIPIENT = " SCA7ZS2B7DEEBGU3THSILYHCRUR32YYE55ZBLYA2 " ;
 const recipientAddress = nem.Address.createFromRawAddress (RECIPIENT);
 const transferTransaction = nem.TransferTransaction.create(
     nem.Deadline.create(),
     recipientAddress ,
     [ nem.NetworkCurrencyMosaic.createRelative(0)],
     nem.PlainMessage.create('From XEMBook'),
     nem.NetworkType.MIJIN_TEST);


  const privateKey = PRIKEY ; 
  const account = nem .Account.createFromPrivateKey ( privateKey , nem .NetworkType .MIJIN_TEST );
  const signedTransaction = account .sign ( transferTransaction , GENERATION_HASH );


 const NODE = ' https://jp5.nemesis.land:3001 ' ;
 const GENERATION_HASH = " 17FA4747F5014B50413CCF968749604D728D7065DC504291EEE556899A534CBB " ;

 const transactionHttp = new nem.TransactionHttp(NODE);
 transactionHttp
    .announce(signedTransaction)
    .subscribe((x) => console.log(x), (err) => console.error(err));