<?php
  /**
<<<<<<< HEAD
  * array(3,2,1);
  * この配列を昇順に並び替えてください
  *
  * array(3,2) -> array(2,3)
  * */

  $array = array(3,2,1);
  for ($i=0; $i<count($array); $i++){
    if ($array[$i] > $array[$i+1]){
      $a = $array[$i];
      $array[$i] = $array[$i+1];
      $array[$i+1] = $a;
    }
  }
  
  var_dump ($array);



  /**
  * array(10,3,2,4,1,14,9,7,8)
  * この配列を昇順に並び替えてください
  * */
=======
    array(3,2,1);
    この配列を昇順に並び替えてください

    array(3,2) -> array(2,3)
  */

  /**
    array(10,3,2,4,1,14,9,7,8)
    この配列を昇順に並び替えてください
  */
>>>>>>> cddedf1939eb3badd0cdcc0cc8b23eaade0fd18c

?>
