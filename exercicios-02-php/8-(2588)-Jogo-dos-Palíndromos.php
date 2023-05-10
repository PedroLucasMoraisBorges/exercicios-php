<?php

while(true){
  $palavra = readline();

  if($palavra == "" || $palavra== " "){
      break;
  }

  $rep_letra = [];
  $letras = [];

  for($i=0 ; $i<strlen($palavra) ; $i++){
      if(count($rep_letra) == 0){
          $rep_letra[] = $palavra[$i];
      }
      else{
          for($j=0 ; $j<count($rep_letra) ; $j++){
              if(in_array($palavra[$i], $rep_letra)){
                  break;
              }
              else{
                  $rep_letra[] = $palavra[$i];
              }
          }
      }
  }
  $counts = [];

  for($i=0 ; $i<count($rep_letra) ; $i++){
    $count = 0;
    for($j=0 ; $j<strlen($palavra) ; $j++){
      if($rep_letra[$i] == $palavra[$j]){
        $count+=1;
      }
    }
    $counts[] = $count;
  }

  $count = 0;
  for($i=0 ; $i<count($counts) ; $i++){
    if($counts[$i]%2 != 0){
      $count+=1;
    }
  }

  if($count == 0){
    echo $count."\n";
  }
  else{
    echo ($count-1)."\n";
  }
}