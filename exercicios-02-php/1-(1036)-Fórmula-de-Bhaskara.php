<?php
$numero = readline();
$numeros = explode(" ", $numero);

$a = (float)$numeros[0];
$b = (float)$numeros[1];
$c = (float)$numeros[2];

if ($a == 0){
  echo "Impossivel calcular\n";
}

else{
  $delta = ($b*$b) - (4 * $a * $c);

  if($delta <= 0){
    echo "Impossivel calcular\n";
  }
  else{
    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);

    echo "R1 = ".number_format($x1, 5)."\n";
    echo "R2 = ".number_format($x2, 5)."\n";
  }
}