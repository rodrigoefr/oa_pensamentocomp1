<?php
  include("Fazenda.php");
  include("Vaca.php");

  $fazenda = new Fazenda();
  $fazenda->gerarVacas();

  echo "</br>";
  echo "Total: " . $fazenda->getTotal();
  echo "</br>";
  echo "Menor qtd: " . $fazenda->getMin();
  echo "</br>";
  echo "Maior qtd: " . $fazenda->getMax();



?>