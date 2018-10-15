  <?php
  function primerVocal($cadena){
    $i=1;
    $vocal= null;
    $long =strlen($cadena);
    $arrayCadena = str_split($cadena);

    while ($i<$long && $vocal==null) {
      if (($arrayCadena[$i]=='A')||
      ($arrayCadena[$i]=='E')||
      ($arrayCadena[$i]=='I')||
      ($arrayCadena[$i]=='O')||
      ($arrayCadena[$i]=='U')){
        $vocal=$arrayCadena[$i];
      }
      $i++;
    }
    return $vocal;
  }
  function primeraConsonante($cadena){
    $j=1;
    $consonante= null;
    $long =strlen($cadena);
    $arrayCadena = str_split($cadena);

    while ($j<$long && $consonante==null) {
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
      ($arrayCadena[$j]=='Z')){
        $consonante=$arrayCadena[$j];
      }
      $j++;
    }
    return $consonante;

  }

  function curp($pa,$sa, $nom,$fecha,$sexo,$estado/*,$nac*/){
    $sex;
    if ($sexo=="Femenino") {
      $sex="M";
    }
    if ($sexo="Masculino") {
      $sex="H";
    }
    $dia =substr($fecha,-2);
    $mes =substr($fecha,-5,2);
    $anio =substr($fecha,-8,2);
    $anio2=substr($fecha,-10,4);

    if ($anio2<=1999) {
      $valor =rand(0,9);

    }if ($anio2>1999) {
      $abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $valor= $abc[rand(0,25)];
    }
    $digito=rand(0,9);

    $curp= $pa[0].primerVocal($pa).$sa[0].$nom[0].$anio.$mes.$dia.$sex.$estado.primeraConsonante($pa).primeraConsonante($sa).primeraConsonante($nom).$valor.$digito;
    //echo "<script>alert('Usuario ya existe');</script>";
    echo "CURP: ".$curp;
  }
  $pApellido = $_POST['caja_p_apellido'];
  $sApellido = $_POST['caja_s_apellido'];
  $nombre = $_POST['caja_nombre'];
  $fecha = $_POST['f_nacimiento'];
  $sexo = $_POST['sexo'];
  $estado=$_POST['estado'];

  curp($pApellido,$sApellido,$nombre,$fecha,$sexo,$estado);

  ?>
