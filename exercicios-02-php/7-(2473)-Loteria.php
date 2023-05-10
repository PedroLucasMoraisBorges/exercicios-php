<?php
$num1 = explode(" ", readline());
$num2 = explode(" ", readline());
$teste = 0;


for($i=0 ; $i<count($num1) ; $i++){
  for($j=0 ; $j<count($num2) ; $j++){
    if($num2[$j] == $num1[$i]){
      $teste += 1;
    }
  }
}

if($teste == 3){
  echo "terno\n";
}
else if($teste == 4){
  echo "quadra\n";
}
else if($teste == 5){
  echo "quina\n";
}
else if($teste == 6){
  echo "sena\n";
}
else if($teste < 3){
  echo "azar\n";
}