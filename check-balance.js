if (typeof localStorage === "undefined" || localStorage === null) {
    var LocalStorage = require('node-localstorage').LocalStorage;
    localStorage = new LocalStorage('./scratch');
  }    
  
  var keys = {
    "akey" : localStorage['akey'],
    "skey" : localStorage['skey']}
    const crypto = require('crypto');
    var XMLHttpRequest = require("xmlhttprequest").XMLHttpRequest;
    var burl = "https://api.binance.com";


    ////// ยอดเงินคงเหลือ-แยกกำไร
    var endPoint3 = '/api/v3/account';
    var dataQueryString3 = 'timestamp=' + Date.now();
    var signature3 = crypto.createHmac('sha256',keys['skey']).update(dataQueryString3).digest('hex');
    var url3 = burl + endPoint3 + '?' + dataQueryString3 + '&signature=' + signature3;
    var ourRequest3 = new XMLHttpRequest();
    ourRequest3.open('GET',  url3 , true);
    ourRequest3.setRequestHeader('X-MBX-APIKEY', keys['akey']);
    ourRequest3.onload = function(){
    ourData3 = JSON.parse(ourRequest3.responseText);
  	console.log('<div align="left">BUSD: <font color="#60FF10">'+ (ourData3.balances[188].free) + '</font> $');
    localStorage['busdwallet'] = Number(ourData3.balances[188].free)
    //USDT=11 BUSD=188

    }
    ourRequest3.send();

