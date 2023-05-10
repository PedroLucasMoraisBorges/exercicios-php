<?php
while(true){
  $teste = readline();
  
  if($teste == " " || $teste == ""){
    break;
  }

  $teste = explode(" ", $teste);
  $n = $teste[0];
  $r = $teste[1];


  $retorno = readline();
  $retorno = explode(" ", $retorno);

  if($n == $r){
    echo "*";
  }

  for($i = 1 ; $i<=$n ; $i++){
    if(in_array($i, $retorno) == false){
      echo $i." ";
    }
  }
  echo "\n";
}
