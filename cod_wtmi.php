<?php

  $vacas[0] = 0;
  $total = 0;
  $min=101;
  $max=0;

  for ($i=0; $i <200; $i++){
    $vacas[$i] = rand(30,100);
    $total = $total + $vacas[$i];
    if ($min > $vacas[$i] ){
        $min = $vacas[$i];
    }
    if ($max < $vacas[$i] ){
        $max = $vacas[$i];
    }
  }
/*
  for ($i=0; $i <200; $i++){
    echo $vacas[$i] . " ";
  }
*/
  echo "</br>";
  echo "Total: " . $total;
  echo "</br>";
  echo "Menor qtd: " . $min;
  echo "</br>";
  echo "Maior qtd: " . $max;

?>