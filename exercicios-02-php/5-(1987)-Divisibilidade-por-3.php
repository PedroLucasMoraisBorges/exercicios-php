<?php

while(true){
  $n = explode(" ", readline());
  if($n[0] == " " || $n[0] == "" || $n[1] == " " || $n[1] == ""){
    break;
  }
  $casos = $n[0];
  $teste = $n[1];
  
  $soma = 0;
  for($i=0 ; $i<$casos ; $i++){
    $soma += $teste[$i];
  }
  if($soma%3 == 0){
    echo $soma." sim\n";
  }
  else{
    echo $soma." nao\n";
  }
}
