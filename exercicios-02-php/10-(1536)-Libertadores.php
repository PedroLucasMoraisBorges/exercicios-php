<?php

$inputs = readline();

while ($inputs != 0){

  $part1 = readline();
  $part2 = readline();
  $part1 = explode(" x ", $part1);
  $part2 = explode(" x ", $part2);
  $t1 = $part1[0] + $part2[1];
  $t2 = $part1[1] + $part2[0];

  if ($t1 > $t2){
    echo "Time 1\n";
  }
  else if ($t2 > $t1){
    echo "Time 2\n";
  }
  else{
    if ($part2[1] > $part1[1]){
      echo "Time 1\n";
    }
    else if ($part1[1] > $part2[1]){
      echo "Time 2\n";
    }
    else{
      echo "Penaltis\n";
    }
  }
  $inputs--;
}

?>
