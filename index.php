<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$amount = filter_input (INPUT_POST, 'amount');
$type = filter_input (INPUT_POST, 'type');
$finalamount = 0;

if($type == "EUR-CZK") {

$finalamount = $amount * 25;
}
elseif($type =="CZK-EUR") {

  $finalamount = $amount /25;
}
elseif ($type =="USD-CZK"){

  $finalamount = $amount *22;
}






?>
 <form action="" method="post">
  <label for="castka">Částka</label>

  <input type="number" id="castka" name="castka" min="1" max="500">  
 <br> 
   <br>
       <br>
<label for ="prevod">Z čeho chcete převádět?</label>
   <br> 
     <br>
<label for="czk-eur">CZK-EUR</label>

<input type="radio" id="czk" name="money" value="CZK-EUR">
    <br>

<label for="eur-czk">EUR-CZK</label>

<input type="radio" id="eur" name="money" value="EUR-CZK">
  <br>   
     <br>
<label for="czk-usd">CZK-USD</label>

<input type="radio" id="usd" name="money" value="CZK-USD">
    <br>
<label for="usd-czk">USD-CZK</label>

<input type="radio" id="usd-czk" name="money" value="USD-CZK">
    <br>
         <br>
<label for="eur-usd">EUR-USD</label>

<input type="radio" id="eur-usd" name="money" value="EUR-USD">
     <br>
<label for="USD-EUR">USD-EUR</label>
     
<input type="radio" id="usd-eur" name="money" value="USD-EUR">

    <br>

<input type="submit" name="Převod" id="Převod" value="Převod">

</form>


   


          





   
</body>
</html>