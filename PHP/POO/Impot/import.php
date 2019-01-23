<?php

class Impot{
 private $_impots;


  public function __construct($nom, $impot)
  {

    $this->CalculImpot($impot);
    $this->AfficherImpot($nom);
  }


  public function AfficherImpot($nom){
    echo $nom . ' doit payer '. $this->_impots . ' dimpôts';

  }

  public function CalculImpot($impot){

    if ($impot > 15000){
      $impot = $impot * 0.20;
    }

    else
    {
      $impot = $impot * 0.15;
    }

    $this->_impots = $impot;
    return $this->_impots;

  }
}





 ?>
