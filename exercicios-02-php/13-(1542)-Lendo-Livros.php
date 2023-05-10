<?php
while(true){
  $input = readline();
  if($input == 0){
    break;
  }
  else{
    $input = explode(" ", $input);
    $a = $input[0];
    $dif = $input[1];
    $b = $input[2];
    
    $mmc = [];
    $n = $a;
    $n1 = $b;
    
    while(true){
      if($n <= 1 && $n1 <= 1){
        break 1;
      }
      for($i = 1 ; $i<=$b ; $i++){
        if($n % $i == 0 && $n1 % $i == 0){
          $n /= $i;
          $n1 /= $i;
          $mmc[] = $i;
          
        }
        else if($n % $i == 0){
          $n /= $i;
          $mmc[] = $i;
        }
        else if($n1 % $i == 0){
          $n1 /= $i;
          $mmc[] = $i;
        }
      }
    }
    
    $mmcs = 1;
    
    for($i = 0 ; $i<count($mmc) ; $i++){
      $mmcs *= $mmc[$i];
    }
    
    $resultado = ($mmcs*$dif)/(($mmcs/$a)-($mmcs/$b));
    $resultado1 = round($resultado, 0 , PHP_ROUND_HALF_DOWN);
    if($resultado1 > $resultado){
      $resultado1 -= 1;
    }

    if($resultado1 == 1){
      echo $resultado1." pagina\n";
    }
    else{
      echo $resultado1." paginas\n";
    } 
  }
}