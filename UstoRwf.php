<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

 
<?php
function convertCurrency($amount, $from, $to){
  $conv_id = "{$from}_{$to}";
  $string = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=$conv_id&compact=ultra");
  $json_a = json_decode($string, true);

  return $amount * round($json_a[$conv_id], 4);
}

echo(convertCurrency(1000, "USD", "RWF"));



?> 




</body>
</html>