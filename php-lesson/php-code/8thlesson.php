<?php

$sum = moto(2,30,2);
  echo $sum."\n";

$math = new math();
$sum = $math->sum4(1,1);
  echo $sum."\n";

function moto($a,$b,$c){
  return $a-$b/$c;
}

class math{
  public $var=4;

  public function sum4($a,$b){
    return $a+$b+$this->var;
  }  
}

?>
