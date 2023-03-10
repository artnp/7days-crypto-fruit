<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<title>7 Days Fruit</title>
<link rel="icon" type="image/x-icon" href="img/sunday.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
body {
  background-color: black;
  color: white;
  font-size: large;
}

.has-details {
  position: relative;
}
.details {
  position: absolute;
  top: 0;
  transform: translateY(70%) scale(0);
  transition: transform 0.1s ease-in;
  transform-origin: right;
  display: inline;
  background: black;
  z-index: 20;
  min-width: 10%;
  padding: 1rem;

}
.has-details:hover span {
  transform: translateY(70%) scale(1);
}
a { color: #FF0000; 
  text-decoration: none;
}
</style>
</head>
<body>
<script>
	if (window.history.replaceState) {
        window.history.replaceState( null, null, window.location.href );
    }
localStorage.setItem("matic", "<?php $matic = fopen('scratch/matic','r');echo fgets($matic);fclose($matic);?>");
localStorage.setItem("gala", "<?php $gala = fopen('scratch/gala','r');echo fgets($gala);fclose($gala);?>");
localStorage.setItem("link", "<?php $link = fopen('scratch/link','r');echo fgets($link);fclose($link);?>");
localStorage.setItem("mana", "<?php $mana = fopen('scratch/mana','r');echo fgets($mana);fclose($mana);?>");
localStorage.setItem("algo", "<?php $algo = fopen('scratch/algo','r');echo fgets($algo);fclose($algo);?>");
localStorage.setItem("sand", "<?php $sand = fopen('scratch/sand','r');echo fgets($sand);fclose($sand);?>");
localStorage.setItem("ape", "<?php $ape = fopen('scratch/ape','r');echo fgets($ape);fclose($ape);?>");
localStorage.setItem("paxg", "<?php $paxg = fopen('scratch/paxg','r');echo fgets($paxg);fclose($paxg);?>");
</script>
<?php
      exec("node api.js", $output); 
      echo implode("\n", $output);
?>
<center>

  <table >
    <thead>
      <tr>
        <th scope="col"><center><font color="orange"><div id="days"></div></font></center></th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <td><center><div id="tree"></div></center></td>
    </tbody>
  </table>
  <table border="1"><td><?exec("node check-balance.js", $output); echo implode("\n", $output);  ?></td></table>
<table border="1">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Coin</th>
    <th scope="col">Market</th>
    <th scope="col">MACD</th>
    <th scope="col">Guppy</th>
    <th scope="col">rsi50</th>
    <th scope="col">rsi25</th>
    <th scope="col"><78.6%</th>
    <th scope="col">Price</th>
    <th scope="col">24hr</th>
    <th scope="col">ATH</th>
    <th scope="col">Amount</th>
	  <th scope="col">Invest</th>
    <th scope="col">Value</th>
    <th scope="col">Percent</th>
	  <th scope="col">++Profit++</th>
    <th scope="col">Amount Sell</th>
    <th scope="col">Buy/Sell</th>
    <th scope="col">Predict</th>
    <th scope="col">Tradingview</th>
    </tr>
  </thead>
  <tbody>
    <tr border="1"> 
      <th scope="row">1</th>
      <td>??? MATIC</td>
      <td class="has-details"><div id="marketmatic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="macdmatic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="guppymatic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="rsi50matic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="rsimatic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="matic-network0.786"></div><span class="details">matic</span></td>
      <td class="has-details"><u><div id="getmatic"></div></u><span class="details">matic</span></td>
      <td class="has-details"><div id="maticpercent"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="matic-networkath"></div><span class="details">matic</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountmatic" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investmatic" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuematic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="Percentmatic"></div><span class="details">matic</span></td>
      <td class="has-details"><div id="Profitmatic"></div><span class="details">matic</span></td>
      <td class="has-details"><input type="text" onFocus="this.select()" id="Amountmaticsell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=MATIC','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/matic-matic/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-warning btn-sm" onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3AMATICBUSD&interval=1D','popup','width=1600,height=900')">MATIC : BUSD</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>??? GALA</td>
      <td class="has-details"><div id="marketgala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="macdgala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="guppygala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="rsi50gala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="rsigala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="gala0.786"></div><span class="details">gala</span></td>
      <td class="has-details"><u><div id="getgala"></div></u><span class="details">gala</span></td>
      <td class="has-details"><div id="galapercent"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="galaath"></div><span class="details">gala</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountgala" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investgala" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuegala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="Percentgala"></div><span class="details">gala</span></td>
      <td class="has-details"><div id="Profitgala"></div><span class="details">gala</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountgalasell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=GALA','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/gala/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-primary btn-sm"  onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3AGALABUSD&interval=1D','popup','width=1600,height=900')">GALA : BUSD</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>??? LINK</td>
      <td class="has-details"><div id="marketlink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="macdlink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="guppylink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="rsi50link"></div><span class="details">link</span></td>
      <td class="has-details"><div id="rsilink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="chainlink0.786"></div><span class="details">link</span></td>
      <td class="has-details"><u><div id="getlink"></div></u><span class="details">link</span></td>
      <td class="has-details"><div id="linkpercent"></div><span class="details">link</span></td>
      <td class="has-details"><div id="chainlinkath"></div><span class="details">link</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountlink" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investlink" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuelink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="Percentlink"></div><span class="details">link</span></td>
      <td class="has-details"><div id="Profitlink"></div><span class="details">link</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountlinksell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=LINK','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/link/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-warning btn-sm" onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3ALINKBUSD&interval=1D','popup','width=1600,height=900')">LINK : BUSD</button></td>
    </tr>
	    <tr>
      <th scope="row">4</th>
      <td>??? MANA</td>
      <td class="has-details"><div id="marketmana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="macdmana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="guppymana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="rsi50mana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="rsimana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="decentraland0.786"></div><span class="details">mana</span></td>
      <td class="has-details"><u><div id="getmana"></div></u><span class="details">mana</span></td>
      <td class="has-details"><div id="manapercent"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="decentralandath"></div><span class="details">mana</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountmana" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investmana" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuemana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="Percentmana"></div><span class="details">mana</span></td>
      <td class="has-details"><div id="Profitmana"></div><span class="details">mana</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountmanasell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=MANA','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/mana/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-primary btn-sm"  onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3AMANABUSD&interval=1D','popup','width=1600,height=900')">MANA : BUSD</button></td>
    </tr>
	    <tr>
      <th scope="row">5</th>
      <td>??? ALGO</td>
      <td class="has-details"><div id="marketalgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="macdalgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="guppyalgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="rsi50algo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="rsialgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="algorand0.786"></div><span class="details">algo</span></td>
      <td class="has-details"><u><div id="getalgo"></div></u><span class="details">algo</span></td>
      <td class="has-details"><div id="algopercent"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="algorandath"></div><span class="details">algo</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountalgo" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investalgo" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuealgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="Percentalgo"></div><span class="details">algo</span></td>
      <td class="has-details"><div id="Profitalgo"></div><span class="details">algo</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountalgosell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=ALGO','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/algo/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-warning btn-sm" onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3AalgoBUSD&interval=1D','popup','width=1600,height=900')">ALGO : BUSD</button></td>
    </tr>
	      <th scope="row">6</th>
      <td>??? APE</td>
      <td class="has-details"><div id="marketape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="macdape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="guppyape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="rsi50ape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="rsiape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="apecoin0.786"></div><span class="details">ape</span></td>
      <td class="has-details"><u><div id="getape"></div></u><span class="details">ape</span></td>
      <td class="has-details"><div id="apepercent"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="apecoinath"></div><span class="details">ape</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountape" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investape" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valueape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="Percentape"></div><span class="details">ape</span></td>
      <td class="has-details"><div id="Profitape"></div><span class="details">ape</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountapesell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=APE','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/ape7-apecoin/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-primary btn-sm"  onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3AAPEBUSD&interval=1D','popup','width=1600,height=900')">APE : BUSD</button></td>
    </tr>
	      <th scope="row">7</th>
      <td>??? SAND</td>
      <td class="has-details"><div id="marketsand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="macdsand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="guppysand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="rsi50sand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="rsisand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="the-sandbox0.786"></div><span class="details">sand</span></td>
      <td class="has-details"><u><div id="getsand"></div></u><span class="details">sand</span></td>
      <td class="has-details"><div id="sandpercent"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="the-sandboxath"></div><span class="details">sand</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountsand" style="height:20px;width:120px;"></td>
	    <td><input type="text" onFocus="this.select()" id="Investsand" style="height:20px;width:70px;"></td>
      <td class="has-details"><div id="Valuesand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="Percentsand"></div><span class="details">sand</span></td>
      <td class="has-details"><div id="Profitsand"></div><span class="details">sand</span></td>
      <td><input type="text" onFocus="this.select()" id="Amountsandsell" style="height:20px;width:100px;"></td>
      <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=SAND','popup','width=1600,height=900')">Convert</button></td>
      <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/sand2-the-sandbox/prediction','popup','width=1600,height=900')">Prediction</button></td>
      <td><button type="button" class="btn btn-warning btn-sm" onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3ASANDBUSD&interval=1D','popup','width=1600,height=900')">SAND : BUSD</button></td>
    </tr>
    <th scope="row">8</th>
    <td>??? PAXG</td>
    <td class="has-details"><div id="marketpaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="macdpaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="guppypaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="rsi50paxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="rsipaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="pax-gold0.786"></div><span class="details">paxg</span></td>
    <td class="has-details"><u><div id="getpaxg"></div></u><span class="details">paxg</span></td>
    <td class="has-details"><div id="paxgpercent"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="pax-goldath"></div><span class="details">paxg</span></td>
    <td><input type="text" onFocus="this.select()" id="Amountpaxg" style="height:20px;width:120px;"></td>
    <td><input type="text" onFocus="this.select()" id="Investpaxg" style="height:20px;width:70px;"></td>
    <td class="has-details"><div id="Valuepaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="Percentpaxg"></div><span class="details">paxg</span></td>
    <td class="has-details"><div id="Profitpaxg"></div><span class="details">paxg</span></td>
    <td><input type="text" onFocus="this.select()" id="Amountpaxgsell" style="height:20px;width:100px;"></td>
    <td><button type="button" class="btn btn-success"  onclick="window.open('https://www.binance.com/en/convert?fromCoin=PAXG','popup','width=1600,height=900')">Convert</button></td>
    <td><button type="button" class="btn btn-secondary btn-sm"  onclick="window.open('https://nomics.com/assets/paxg/prediction','popup','width=1600,height=900')">Prediction</button></td>
    <td><button type="button" class="btn btn-primary btn-sm" onclick="window.open('https://www.tradingview.com/chart/?symbol=BINANCE%3APAXGBUSD&interval=1D','popup','width=1600,height=900')">PAXG : BUSD</button></td>
  </tr>
</tbody>
</table>
<br>
<button type="button" class="save" style="font-size:12pt;height:30px;width:130px;" onClick="window.location.reload();">save data</button> <br><a id="results">[ <img src="https://icons.iconarchive.com/icons/flat-icons.com/square/16/save-icon.png"> ????????????????????????????????? ]</a>
</form>

</center>

<script>
matic = localStorage.getItem("matic")
gala = localStorage.getItem("gala")
link = localStorage.getItem("link")
mana = localStorage.getItem("mana")
algo = localStorage.getItem("algo")
sand = localStorage.getItem("sand")
ape = localStorage.getItem("ape")
paxg = localStorage.getItem("paxg")


  cryptoCoin = ["MATIC", "GALA", "LINK", "MANA", "ALGO", "APE", "SAND", "PAXG"]
  cryptoCoinFullname = ["matic-network","gala","chainlink","decentraland","algorand","apecoin","the-sandbox","pax-gold"]
  
if(localStorage) {
	$(document).ready(function() {
		$(".save").click(function() {
       Investmatic = $("#Investmatic").val()
       Investgala = $("#Investgala").val()
       Investlink = $("#Investlink").val()
       Investmana = $("#Investmana").val()
       Investalgo = $("#Investalgo").val()
       Investape = $("#Investape").val()
       Investsand = $("#Investsand").val()
       Investpaxg = $("#Investpaxg").val()


        localStorage.setItem("Investmatic", Investmatic)
        localStorage.setItem("Investgala", Investgala)
        localStorage.setItem("Investlink", Investlink)
        localStorage.setItem("Investmana", Investmana)
        localStorage.setItem("Investalgo", Investalgo)
        localStorage.setItem("Investape", Investape)
        localStorage.setItem("Investsand", Investsand)
        localStorage.setItem("Investpaxg", Investpaxg)
		});
	});
}
Amountmatic = eval((localStorage.getItem("matic")).replace(',',''))
Amountgala = eval((localStorage.getItem("gala")).replace(',',''))
Amountlink = eval((localStorage.getItem("link")).replace(',',''))
Amountmana = eval((localStorage.getItem("mana")).replace(',',''))
Amountalgo = eval((localStorage.getItem("algo")).replace(',',''))
Amountape = eval((localStorage.getItem("ape")).replace(',',''))
Amountsand = eval((localStorage.getItem("sand")).replace(',',''))
Amountpaxg = eval((localStorage.getItem("paxg")).replace(',',''))

Investmatic = eval((localStorage.getItem("Investmatic")).replace(',',''))
Investgala = eval((localStorage.getItem("Investgala")).replace(',',''))
Investlink = eval((localStorage.getItem("Investlink")).replace(',',''))
Investmana = eval((localStorage.getItem("Investmana")).replace(',',''))
Investalgo = eval((localStorage.getItem("Investalgo")).replace(',',''))
Investape = eval((localStorage.getItem("Investape")).replace(',',''))
Investsand = eval((localStorage.getItem("Investsand")).replace(',',''))
Investpaxg = eval((localStorage.getItem("Investpaxg")).replace(',',''))

document.getElementById("Amountmatic").setAttribute('value' , Amountmatic||0 )
document.getElementById("Amountgala").setAttribute('value' , Amountgala||0 )
document.getElementById("Amountlink").setAttribute('value' , Amountlink||0 )
document.getElementById("Amountmana").setAttribute('value' , Amountmana||0 )
document.getElementById("Amountalgo").setAttribute('value' , Amountalgo||0 )
document.getElementById("Amountape").setAttribute('value' , Amountape||0 )
document.getElementById("Amountsand").setAttribute('value' , Amountsand||0 )
document.getElementById("Amountpaxg").setAttribute('value' , Amountpaxg||0 )

document.getElementById("Investmatic").setAttribute('value' , Investmatic||0 )
document.getElementById("Investgala").setAttribute('value' , Investgala||0 )
document.getElementById("Investlink").setAttribute('value' , Investlink||0 )
document.getElementById("Investmana").setAttribute('value' , Investmana||0 )
document.getElementById("Investalgo").setAttribute('value' , Investalgo||0 )
document.getElementById("Investape").setAttribute('value' , Investape||0 )
document.getElementById("Investsand").setAttribute('value' , Investsand||0 )
document.getElementById("Investpaxg").setAttribute('value' , Investpaxg||0 )

aryx = "Coin,Amount,Invest"+"\nMATIC," + localStorage.getItem("Amountmatic")+","+localStorage.getItem("Investmatic")+"\nGALA,"+localStorage.getItem("Amountgala")+","+localStorage.getItem("Investgala")+"\nLINK,"+localStorage.getItem("Amountlink")+","+localStorage.getItem("Investlink")+"\nMANA,"+localStorage.getItem("Amountmana")+","+localStorage.getItem("Investmana")+"\nALGO,"+localStorage.getItem("Amountalgo")+","+localStorage.getItem("Investalgo")+"\nAPE,"+localStorage.getItem("Amountape")+","+localStorage.getItem("Investape")+"\nSAND,"+localStorage.getItem("Amountsand")+","+localStorage.getItem("Investsand")+"\nPAXG,"+localStorage.getItem("Amountpaxg")+","+localStorage.getItem("Investpaxg")
blob = new Blob([aryx], {type: "text/csv"})
urlx = URL.createObjectURL(blob)
a = document.querySelector("#results");
a.href = urlx
a.download = "7days-fruit-export.csv"


  const getmatic = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=MATICBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getmatic").innerHTML = price
    if (data.priceChangePercent > 0){
      document.getElementById("maticpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("maticpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountmatic)-Investmatic).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitmatic").innerHTML = profit
    document.getElementById("Valuematic").innerHTML = (price*Amountmatic).toFixed(0)+"$"
    document.getElementById("Percentmatic").innerHTML = "<u>"+((((price*Amountmatic)*100)/Investmatic)-100||0).toFixed(0)+"%</u>"
    if((price*Amountmatic)-Investmatic >0){
    document.getElementById("Amountmaticsell").setAttribute('value',((price*Amountmatic)-Investmatic)/price)
    } else {
    document.getElementById("Amountmaticsell").disabled = true;
    }
})
}
const getgala = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=GALABUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getgala").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("galapercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("galapercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountgala)-Investgala).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitgala").innerHTML = profit
    document.getElementById("Valuegala").innerHTML = (price*Amountgala).toFixed(0)+"$"
    document.getElementById("Percentgala").innerHTML = "<u>"+((((price*Amountgala)*100)/Investgala)-100||0).toFixed(0)+"%</u>"
    if((price*Amountgala)-Investgala >0){
    document.getElementById("Amountgalasell").setAttribute('value',((price*Amountgala)-Investgala)/price)
    } else {
    document.getElementById("Amountgalasell").disabled = true;
    }
})
}
const getlink = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=LINKBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getlink").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("linkpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("linkpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountlink)-Investlink).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitlink").innerHTML = profit
    document.getElementById("Valuelink").innerHTML = (price*Amountlink).toFixed(0)+"$"
    document.getElementById("Percentlink").innerHTML = "<u>"+((((price*Amountlink)*100)/Investlink)-100||0).toFixed(0)+"%</u>"
    if((price*Amountlink)-Investlink >0){
    document.getElementById("Amountlinksell").setAttribute('value',((price*Amountlink)-Investlink)/price)
    } else {
    document.getElementById("Amountlinksell").disabled = true;
    }
})
}
const getmana = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=MANABUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getmana").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("manapercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("manapercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountmana)-Investmana).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitmana").innerHTML = profit
    document.getElementById("Valuemana").innerHTML = (price*Amountmana).toFixed(0)+"$"
    document.getElementById("Percentmana").innerHTML = "<u>"+((((price*Amountmana)*100)/Investmana)-100||0).toFixed(0)+"%</u>"
    if((price*Amountmana)-Investmana > 0){
    document.getElementById("Amountmanasell").setAttribute('value',((price*Amountmana)-Investmana)/price)
    } else {
    document.getElementById("Amountmanasell").disabled = true;
    }
})
}
const getalgo = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=ALGOBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getalgo").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("algopercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("algopercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountalgo)-Investalgo).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitalgo").innerHTML = profit
    document.getElementById("Valuealgo").innerHTML = (price*Amountalgo).toFixed(0)+"$"
    document.getElementById("Percentalgo").innerHTML = "<u>"+((((price*Amountalgo)*100)/Investalgo)-100||0).toFixed(0)+"%</u>"
    if((price*Amountalgo)-Investalgo >0){
    document.getElementById("Amountalgosell").setAttribute('value',((price*Amountalgo)-Investalgo)/price)
    } else {
    document.getElementById("Amountalgosell").disabled = true;
    }
})
}
const getape = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=APEBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getape").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("apepercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("apepercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountape)-Investape).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitape").innerHTML = profit
    document.getElementById("Valueape").innerHTML = (price*Amountape).toFixed(0)+"$"
    document.getElementById("Percentape").innerHTML = "<u>"+((((price*Amountape)*100)/Investape)-100||0).toFixed(0)+"%</u>"
    if((price*Amountape)-Investape >0){
    document.getElementById("Amountapesell").setAttribute('value',((price*Amountape)-Investape)/price)
    } else {
    document.getElementById("Amountapesell").disabled = true;
    }
})
}
const getsand = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=SANDBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getsand").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("sandpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("sandpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountsand)-Investsand).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitsand").innerHTML = profit
    document.getElementById("Valuesand").innerHTML = (price*Amountsand).toFixed(0)+"$"
    document.getElementById("Percentsand").innerHTML = "<u>"+((((price*Amountsand)*100)/Investsand)-100||0).toFixed(0)+"%</u>"
    if((price*Amountsand)-Investsand >0){
    document.getElementById("Amountsandsell").setAttribute('value',((price*Amountsand)-Investsand)/price)
    } else {
    document.getElementById("Amountsandsell").disabled = true;
    }
})
}
const getpaxg = async () => {
   fetch("https://api.binance.com/api/v1/ticker/24hr?symbol=PAXGBUSD")
  .then(response => response.json())
  .then(data => {
    price = Number(data.askPrice)
    document.getElementById("getpaxg").innerHTML = price
        if (data.priceChangePercent > 0){
      document.getElementById("paxgpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%???').fontcolor("#108F3A")
    } else {
      document.getElementById("paxgpercent").innerHTML = (Number(data.priceChangePercent).toFixed(1) + '%').fontcolor("#E5260A")
    }
    profit = ((price*Amountpaxg)-Investpaxg).toFixed(1)
    if (profit > 0){
      profit = profit.fontcolor("lime")+'????'
    } else if (profit == 0){
      profit = profit.fontcolor("white")
    } else {
      profit = profit.fontcolor("red")+'????'
    }
    document.getElementById("Profitpaxg").innerHTML = profit
    document.getElementById("Valuepaxg").innerHTML = (price*Amountpaxg).toFixed(0)+"$"
    document.getElementById("Percentpaxg").innerHTML = "<u>"+((((price*Amountpaxg)*100)/Investpaxg)-100||0).toFixed(0)+"%</u>"
    if((price*Amountpaxg)-Investpaxg >0){
    document.getElementById("Amountpaxgsell").setAttribute('value',((price*Amountpaxg)-Investpaxg)/price)
    } else {
    document.getElementById("Amountpaxgsell").disabled = true;
    }
})
}

getmatic()
getgala()
getlink()
getmana()
getalgo()
getape()
getsand()
getpaxg()

//  tcount=setInterval(function(){
//    tcount++
//    if (tcount==20) {getmatic()|getgala()|getlink()|getmana()|getalgo()|getape()|getsand(); tcount=0}
//  },2000);

function technical(){
requests=new Array(cryptoCoin.length);
for (let i = 0; i < cryptoCoin.length; i++) {
    var url = "https://api.binance.com/api/v3/klines?symbol=" + cryptoCoin[i] +'BUSD&interval=1d&limit=' + 56
    requests[i] = new XMLHttpRequest();
    requests[i].open("GET", url);
    requests[i].onload = function() {
        var result = JSON.parse(requests[i].responseText);
close1 = Number(result[0][4])
close2 = Number(result[1][4])
close3 = Number(result[2][4])
close4 = Number(result[3][4])
close5 = Number(result[4][4])
close6 = Number(result[5][4])
close7 = Number(result[6][4])
close8 = Number(result[7][4])
close9 = Number(result[8][4])
close10 = Number(result[9][4])
close11 = Number(result[10][4])
close12 = Number(result[11][4])
close13 = Number(result[12][4])
close14 = Number(result[13][4])
close15 = Number(result[14][4])
close16 = Number(result[15][4])
close17 = Number(result[16][4])
close18 = Number(result[17][4])
close19 = Number(result[18][4])
close20 = Number(result[19][4])
close21 = Number(result[20][4])
close22 = Number(result[21][4])
close23 = Number(result[22][4])
close24 = Number(result[23][4])
close25 = Number(result[24][4])
close26 = Number(result[25][4])
close27 = Number(result[26][4])
close28 = Number(result[27][4])
close29 = Number(result[28][4])
close30 = Number(result[29][4])
close31 = Number(result[30][4])
close32 = Number(result[31][4])
close33 = Number(result[32][4])
close34 = Number(result[33][4])
close35 = Number(result[34][4])
close36 = Number(result[35][4])
close37 = Number(result[36][4])
close38 = Number(result[37][4])
close39 = Number(result[38][4])
close40 = Number(result[39][4])
close41 = Number(result[40][4])
close42 = Number(result[41][4])
close43 = Number(result[42][4])
close44 = Number(result[43][4])
close45 = Number(result[44][4])
close46 = Number(result[45][4])
close47 = Number(result[46][4])
close48 = Number(result[47][4])
close49 = Number(result[48][4])
close50 = Number(result[49][4])
close51 = Number(result[50][4])
close52 = Number(result[51][4])
close53 = Number(result[52][4])
close54 = Number(result[53][4])
close55 = Number(result[54][4])
        sma3 = (close55+close54+close53)/3
        sma5 = (close55+close54+close53+close52+close51)/5
        sma8 = (close55+close54+close53+close52+close51+close50+close49+close48)/8
        sma10 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46)/10
        sma12 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44)/12
        sma15 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41)/15
        sma26 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30)/26
        sma30 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26)/30
        sma35 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26+close25+close24+close23+close22+close21)/35
        sma40 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26+close25+close24+close23+close22+close21+close20+close19+close18+close17+close16)/40
        sma45 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26+close25+close24+close23+close22+close21+close20+close19+close18+close17+close16+close15+close14+close13+close12+close11)/45
        sma50 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26+close25+close24+close23+close22+close21+close20+close19+close18+close17+close16+close15+close14+close13+close12+close11+close10+close9+close8+close7+close6)/50
        sma55 = (close55+close54+close53+close52+close51+close50+close49+close48+close47+close46+close45+close44+close43+close42+close41+close40+close39+close38+close37+close36+close35+close34+close33+close32+close31+close30+close29+close28+close27+close26+close25+close24+close23+close22+close21+close20+close19+close18+close17+close16+close15+close14+close13+close12+close11+close10+close9+close8+close7+close6+close5+close4+close3+close2+close1)/55
        ema3 = (Number(result[55][4])*0.3333)+(sma3*(1-0.3333))
        ema5 = (Number(result[55][4])*0.3333)+(sma5*(1-0.3333))
        ema8 = (Number(result[55][4])*0.3333)+(sma8*(1-0.3333))
        ema10 = (Number(result[55][4])*0.3333)+(sma10*(1-0.3333))
        ema12 = (Number(result[55][4])*0.3333)+(sma12*(1-0.3333))
        ema15 = (Number(result[55][4])*0.3333)+(sma15*(1-0.3333))
        ema26 = (Number(result[55][4])*0.3333)+(sma26*(1-0.3333))
        ema30 = (Number(result[55][4])*0.3333)+(sma30*(1-0.3333))
        ema35 = (Number(result[55][4])*0.3333)+(sma35*(1-0.3333))
        ema40 = (Number(result[55][4])*0.3333)+(sma40*(1-0.3333))
        ema45 = (Number(result[55][4])*0.3333)+(sma45*(1-0.3333))
        ema50 = (Number(result[55][4])*0.3333)+(sma50*(1-0.3333))
        ema55 = (Number(result[55][4])*0.3333)+(sma55*(1-0.3333))
        macd = (ema12-ema26).toFixed(2)
        Guppy = ((ema3+ema5+ema8+ema10+ema12+ema15)-(ema30+ema35+ema40+ema45+ema50+ema55)).toFixed(2)
        if (macd > 0) {
        document.getElementById("macd"+cryptoCoin[i].toLowerCase()).innerHTML = macd+'[???]'
        document.getElementById("macd"+cryptoCoin[i].toLowerCase()).style.color = "#16D813"
        } else {
        document.getElementById("macd"+cryptoCoin[i].toLowerCase()).innerHTML = macd+'[X]'
        document.getElementById("macd"+cryptoCoin[i].toLowerCase()).style.color = "red"
        }
        if (Guppy > 0) {
        document.getElementById("guppy"+cryptoCoin[i].toLowerCase()).innerHTML = Guppy+'[???]'
        document.getElementById("guppy"+cryptoCoin[i].toLowerCase()).style.color = "#16D813"
        } else {
        document.getElementById("guppy"+cryptoCoin[i].toLowerCase()).innerHTML = Guppy+'[X]'
        document.getElementById("guppy"+cryptoCoin[i].toLowerCase()).style.color = "red"
        }
/////////////////////////////////////////////////////////////////////////////////////////////////////??????????????? RSI ?????????????????????-??????????????????
function calculateUptrend(closingPrices, maPeriod, rsiPeriod) {
  const ma = calculateMA(closingPrices, maPeriod)
  const rsi = calculateRSI(closingPrices, rsiPeriod)
  if (rsi < 50){
    document.getElementById("rsi"+cryptoCoin[i].toLowerCase()).innerHTML = '<center>'+ (rsi.toFixed(0)).fontcolor("green") +'</center>'
  } else if (rsi > 90){
    document.getElementById("rsi"+cryptoCoin[i].toLowerCase()).innerHTML = '<center>'+ (rsi.toFixed(0)).fontcolor("red") +'</center>'
  } else {
    document.getElementById("rsi"+cryptoCoin[i].toLowerCase()).innerHTML = '<center>'+ (rsi.toFixed(0)).fontcolor("orange") +'</center>'
  }
  const uptrend = (ma > 0) && (rsi > 50)
  return uptrend
}
function calculateMA(closingPrices, period) {
  let sum = 0
  for (let i = 0; i < period; i++) {
    sum += closingPrices[i]
  }
  const ma = sum / period
  return ma
}
function calculateRSI(closingPrices, period) {
  avgUpwardChange = 0
  for (let i = 1; i < closingPrices.length; i++) {
    avgUpwardChange += Math.max(0, closingPrices[i] - closingPrices[i - 1])
  }
  avgUpwardChange /= closingPrices.length;
  avgDownwardChange = 0
  for (let i = 1; i < closingPrices.length; i++) {
    avgDownwardChange += Math.max(0, closingPrices[i - 1] - closingPrices[i])
  }
  avgDownwardChange /= closingPrices.length
  const rsi = 100 - (100 / (1 + (avgUpwardChange / avgDownwardChange)))
  return rsi
}
const closingPrices = [
close31, close32, close33, close34, close35, close36, close37, close38, close39, close40,
close41, close42, close43, close44, close45, close46, close47, close48, close49, close50, close51, close52, close53, close54, close55
]
const maPeriod = 25
const rsiPeriod = 25
const uptrend = calculateUptrend(closingPrices, maPeriod, rsiPeriod)
if (uptrend === true){

  document.getElementById("market"+cryptoCoin[i].toLowerCase()).innerHTML = '<center>'+'??????????????????'.fontcolor("#108F3A")+'</center>'
} else if (uptrend === false){
  document.getElementById("market"+cryptoCoin[i].toLowerCase()).innerHTML = '<center>'+'????????????'.fontcolor("red")+'</center>'
}

function rsi50(closingPrices50) {
  const rsi = calculateRSI(closingPrices50, rsiPeriod50)
  if (rsi < 50){
    document.getElementById("rsi50"+cryptoCoin[i].toLowerCase()).innerHTML = '<center><font color="#16D813">'+ rsi.toFixed(0) +'[???]</font></center>'
  } else if (rsi > 90){
    document.getElementById("rsi50"+cryptoCoin[i].toLowerCase()).innerHTML = '<center><font color="red">'+ rsi.toFixed(0) +'[X]</font></center>'
  } else {
    document.getElementById("rsi50"+cryptoCoin[i].toLowerCase()).innerHTML = '<center><font color="orange">'+ rsi.toFixed(0) +'[!]</font></center>'
  }
}
function calculateRSI(closingPrices50, period) {
  avgUpwardChange = 0
  for (let i = 1; i < closingPrices50.length; i++) {
    avgUpwardChange += Math.max(0, closingPrices50[i] - closingPrices50[i - 1])
  }
  avgUpwardChange /= closingPrices50.length;
  avgDownwardChange = 0
  for (let i = 1; i < closingPrices50.length; i++) {
    avgDownwardChange += Math.max(0, closingPrices50[i - 1] - closingPrices50[i])
  }
  avgDownwardChange /= closingPrices50.length
  const rsi = 100 - (100 / (1 + (avgUpwardChange / avgDownwardChange)))
  return rsi
}
const closingPrices50 = [
close55,close54,close53,close52,close51,close50,close49,close48,close47,close46,close45,close44,close43,close42,close41,close40,close39,close38,close37,close36,close35,close34,close33,close32,close31,close30,close29,close28,close27,close26,close25,close24,close23,close22,close21,close20,close19,close18,close17,close16,close15,close14,close13,close12,close11,close10,close9,close8,close7,close6
]
const rsiPeriod50 = 50
rsi50(closingPrices50)
}
    requests[i].send()
}
} technical()


function ATH(){
for (i = 0; i < cryptoCoinFullname.length; i++) {
 
// https://api.coingecko.com/api/v3/coins/list
fetch("https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids="+ cryptoCoinFullname[i] )
    .then(response => response.json())
    .then(data => {
        ath = Number(data[0].ath)
        atl = Number(data[0].atl)
        fibo = ath+(atl-((ath-atl)*0.786))
        price = Number(data[0].current_price)
        percentc = Number(data[0].ath_change_percentage)
        id = data[0].id

        if (price < fibo){
        document.getElementById(id+'0.786').innerHTML= '[???]'.fontcolor("#16D813")+fibo.toFixed(3)
        }
        document.getElementById(id+'ath').innerHTML= percentc.toFixed(0)+'%'

     })
    }
  
  }
    ATH()

function treeday(){
  const d = new Date()
  let day = d.getDay()
  if (day == 1){
    document.getElementById('days').innerHTML= 'Day: '+day
    document.getElementById('tree').innerHTML= "<img src='img/monday.png' width='15%'>"
  } else if (day == 2){
    document.getElementById('days').innerHTML= 'Day: '+day
    document.getElementById('tree').innerHTML= "<img src='img/tuesday.png' width='15%'>"
  } else if (day == 3){
    document.getElementById('days').innerHTML= 'Day: '+day
    document.getElementById('tree').innerHTML= "<img src='img/wednesday.png' width='15%'>"
  } else if (day == 4 || day == 5){
    document.getElementById('days').innerHTML= 'Day: '+day
    document.getElementById('tree').innerHTML= "<img src='img/friday.png' width='15%'>"
  } else if (day == 6 || day == 7){
    document.getElementById('days').innerHTML= 'Day: '+day
    document.getElementById('tree').innerHTML= "<img src='img/sunday.png' width='15%'>"
  }

}treeday()
</script>
</body>
</html>