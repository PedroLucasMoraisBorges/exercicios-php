<?php
while(true){
  $n = (int)readline();
  if($n == 0){
    break;
  }
  
  $joao = 0;
  $maria = 0;
  
  $casos = readline();
  $casos = explode(" " , $casos);
  
  for($c = 0 ; $c<$n ; $c++){
    if($casos[$c] == 0){
      $maria+=1;
    }
    else if($casos[$c] == 1){
      $joao+=1;
    }
  }
  echo "Mary won ".$maria." times and John won ".$joao." times\n";
}
