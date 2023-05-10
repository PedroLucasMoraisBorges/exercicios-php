<?php
$num = intval(fgets(STDIN));
$valores = array();
for($i = 0; $i < $num; $i++){
    $valor = intval(fgets(STDIN));
    $valores[] = $valor;
}
sort($valores);
$valorAtual = $valores[0];
$count = 1;
for($i = 1; $i < $num; $i++){
    if($valores[$i] == $valorAtual){
        $count++;
    }else{
        echo $valorAtual . " aparece " . $count . " vez(es)\n";
        $valorAtual =$valores[$i];
        $count=1;
    }
}
echo $valorAtual . " aparece " . $count . " vez(es)\n";
?>