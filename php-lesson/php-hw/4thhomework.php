<?php
  /**
  * array(3,2,1);
  * この配列を昇順に並び替えてください
  *
  * array(3,2) -> array(2,3)
  * */

  $array = array(3,2,1);
  for ($i=0; $i<count($array)-1; $i++){
    for ($h=0; $h<count($array)-1; $h++){
      if ($array[$h] > $array[$h+1]){
        $a = $array[$h];
        $array[$h] = $array[$h+1];
        $array[$h+1] = $a;
      }   
    }
  }
  var_dump ($array);


  /**
  * array(10,3,2,4,1,14,9,7,8)
  * この配列を昇順に並び替えてください
  * */

  $array = array(10,3,2,4,1,14,9,7,8);
  for ($i=0; $i<count($array)-1; $i++){
    for ($h=0; $h<count($array)-1; $h++){
      if ($array[$h] > $array[$h+1]){
        $a = $array[$h];
        $array[$h] = $array[$h+1];
        $array[$h+1] = $a;
      }   
    }
  }
  var_dump ($array);

?>
