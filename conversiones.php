<?php
function conversiones($decimal){
  echo "Binario: ".decbin($decimal);
  echo "<br>";
  echo "Hexadecimal: ".dechex($decimal);
  echo "<br>";
  echo "Octal: ".decoct($decimal);
}

function complemento($decimal){
  echo "Complemento";
  $binario = decbin($decimal);
  $long =strlen($binario);
  for ($i=0; $i < $long; $i++) {
    if ($binario[$i]==1) {
      $binario[$i]==0;
    }
  }

  for ($i=0; $i <$long ; $i++) {
    echo $binario[$i];
  }

}
$decimal = $_POST['caja_decimal'];

conversiones($decimal);
complemento($decimal);
?>
