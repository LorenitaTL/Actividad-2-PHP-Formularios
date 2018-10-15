<?php
  function vocales($cadena){
    $vocal= 0;
    $long =strlen($cadena);
    $arrayCadena = str_split($cadena);
    //var_dump($arrayCadena);
    for ($i=0; $i < $long; $i++) {
      if (($arrayCadena[$i]=='A')||
      ($arrayCadena[$i]=='E')||
      ($arrayCadena[$i]=='I')||
      ($arrayCadena[$i]=='O')||
      ($arrayCadena[$i]=='U')||
      ($arrayCadena[$i]=='a')||
      ($arrayCadena[$i]=='e')||
      ($arrayCadena[$i]=='i')||
      ($arrayCadena[$i]=='o')||
      ($arrayCadena[$i]=='u')){
        $vocal++;
      }
    }

    echo "Total vocales: ".$vocal;
  }

  function consonantes($cadena){
    $consonante= 0;
    $long =strlen($cadena);
    $arrayCadena = str_split($cadena);
    //var_dump($arrayCadena);
    for ($j=0; $j < $long; $j++) {
      if (($arrayCadena[$j]=='B')||
          ($arrayCadena[$j]=='C')||
          ($arrayCadena[$j]=='D')||
          ($arrayCadena[$j]=='F')||
          ($arrayCadena[$j]=='G')||
          ($arrayCadena[$j]=='H')||
          ($arrayCadena[$j]=='J')||
          ($arrayCadena[$j]=='K')||
          ($arrayCadena[$j]=='L')||
          ($arrayCadena[$j]=='M')||
          ($arrayCadena[$j]=='N')||
          ($arrayCadena[$j]=='P')||
          ($arrayCadena[$j]=='Q')||
          ($arrayCadena[$j]=='R')||
          ($arrayCadena[$j]=='S')||
          ($arrayCadena[$j]=='T')||
          ($arrayCadena[$j]=='V')||
          ($arrayCadena[$j]=='X')||
          ($arrayCadena[$j]=='Y')||
          ($arrayCadena[$j]=='Z')||
          ($arrayCadena[$j]=='b')||
          ($arrayCadena[$j]=='c')||
          ($arrayCadena[$j]=='d')||
          ($arrayCadena[$j]=='f')||
          ($arrayCadena[$j]=='g')||
          ($arrayCadena[$j]=='h')||
          ($arrayCadena[$j]=='j')||
          ($arrayCadena[$j]=='k')||
          ($arrayCadena[$j]=='l')||
          ($arrayCadena[$j]=='m')||
          ($arrayCadena[$j]=='n')||
          ($arrayCadena[$j]=='p')||
          ($arrayCadena[$j]=='q')||
          ($arrayCadena[$j]=='r')||
          ($arrayCadena[$j]=='s')||
          ($arrayCadena[$j]=='t')||
          ($arrayCadena[$j]=='v')||
          ($arrayCadena[$j]=='x')||
          ($arrayCadena[$j]=='y')||
          ($arrayCadena[$j]=='z')){
        $consonante++;
      }
    }

    echo "Total consonantes: ".$consonante;
  }

  function numero_letras($cadena,$letra){
    $veces=0;
    $long =strlen($cadena);
    $arrayCadena = str_split($cadena);
    for ($i=0; $i < $long; $i++) {
      if ($arrayCadena[$i]==$letra) {
        $veces++;
      }
    }
    echo "Veces que aparece la letra indicada: ".$veces;
  }

  $cadena = $_POST['caja_cadena'];
  $letra = $_POST['caja_letra'];
  vocales($cadena);
  echo "<br>";
  consonantes($cadena);
  echo "<br>";
  numero_letras($cadena,$letra);
 ?>
