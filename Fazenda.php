<?php
//include("Vaca.php");
class Fazenda {

    public $vacas;
    public $totalProducao;
    public $min=101;
    public $max=0;
  
    public function getMin(){
        return $this->min;
    }

    public function getMax(){
        return $this->max;
    }
    
    public function getTotal(){
        return $this->totalProducao;
    }

    public function gerarVacas(){
        for ($i=0; $i <200; $i++){
            $vaca = new Vaca();
            $vaca->id = $i;
            $vaca->producao =rand(30,100);

            $this->vacas[$i] = $vaca;
            $this->totalProducao = $this->totalProducao + $vaca->producao;

            if ($this->min > $vaca->producao ){
                $this->min = $vaca->producao;
            }
            if ($this->max < $vaca->producao ){
                $this->max = $vaca->producao;
            }
        
        }
    }

}
?>