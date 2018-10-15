<?php
function operacion($operacion){
  $sin_espacio = str_replace(" ","",$operacion);//Reemplaza valores
  $operadores = array("+","-","/","*");
  echo $sin_espacio;
  $long =strlen($sin_espacio);//tamaño de una cadena
  echo $long;
  $arrayOp =str_split($sin_espacio);

  $op;
  for ($i=0; $i < $long; $i++) {
    for ($j=0; $j < 4; $j++) {
      if ($arrayOp[$i]==$operadores[$j]) {
        $op = $arrayOp[$i];
      }// code...
    }
  }
  $operandos= explode($op,$sin_espacio);
  echo $operandos[0];
  echo $operandos[1];
  echo "<br>";
  if ($op=="+") {
    echo "Resultado = ".$operandos[0]+$operandos[1];
  }elseif ($op=="-") {
    echo "Resultado = ".$operandos[0]-$operandos[1];
  }elseif ($op=="*") {
    echo "Resultado = ".$operandos[0]*$operandos[1];
  }elseif ($op=="/") {
    echo "Resultado = ".$operandos[0]/$operandos[1];
  }


}
$operacion = $_POST['caja_operacion'];

operacion($operacion);
 ?>
