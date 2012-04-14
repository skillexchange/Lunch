<?php
  /**
   * There are 4 values, $m, $e, $s, $y.
   * When they are multiples of 3, print 'Fizz';  
   * hint:
   *    What is 9 divided by 3 ? 
   *    So when a number is not multiples of 3, remainder is ??? 
   */


  $m=6;
  $e=7;
  $s=8;
  $y=9;
  
//  $i=5%2;
//  print $i."\n";

  $messy = array($m,$e,$s,$y);

//  var_dump($messy); 
//  echo $messy[1]."\n";

  for ($i=0; $i<count($messy); $i++){
    if($messy[$i] % 3 == 0){
      echo "Fizz\n";
    }else{
      echo "non-Fizz\n";
    }
  }  
?>
