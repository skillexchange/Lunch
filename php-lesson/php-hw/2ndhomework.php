<?php
  /**
   * HW1
   * foreachを使って、
   *  3の倍数のときFizzを
   *  5の倍数のときBuzzを
   *  15の倍数のときFizzBuzzを表示してください。
   */
    $array=array('a'=>3, 'b'=>4, 'c'=>5, 
             'd'=>6, 'e'=>7, 'f'=>8,
             'g'=>9, 'h'=>10, 'i'=>11,
             'j'=>12, 'k'=>13, 'm'=>14, 'n'=>15);

  foreach ($array as $key => $value){
    if($value%3 == 0){ 
      echo $key.': Fizz'."\n";
    }  if($value%5 == 0){ 
      echo $key.': Buzz'."\n";
    }  if($value%15 == 0){ 
      echo $key.': FizzBuzz'."\n";
    }
  }

  /**
   * HW2-2
   * 
   * 以下の連想配列のうち、最大値をもったkeyを表示してください。
   */
   $array=array('a'=>3, 'b'=>2, 'c'=>5, 
             'd'=>25, 'e'=>37, 'f'=>8,
             'g'=>9, 'h'=>4, 'i'=>11,
             'j'=>12, 'k'=>13, 'm'=>14, 'n'=>15);


?>
