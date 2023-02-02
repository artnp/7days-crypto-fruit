if (typeof localStorage === "undefined" || localStorage === null) {
    var LocalStorage = require('node-localstorage').LocalStorage;
    localStorage = new LocalStorage('./scratch');
  }    
  
  localStorage['akey'] = '';
  localStorage['skey'] = '';
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
    
    localStorage['matic'] = ourData3.balances[168].free
    localStorage['gala'] = ourData3.balances[462].free
    localStorage['link'] = ourData3.balances[32].free
    localStorage['mana'] = ourData3.balances[69].free
    localStorage['algo'] = ourData3.balances[177].free
    localStorage['sand'] = ourData3.balances[278].free
    localStorage['ape'] = ourData3.balances[516].free
    localStorage['paxg'] = ourData3.balances[284].free
    }
    ourRequest3.send();

