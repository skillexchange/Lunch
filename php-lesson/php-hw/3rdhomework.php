<?php
  /**
    array(1,2,3,4,5) array(6,7,8,9,10)
    2回for each をつかって、 41,42,43,44,45
    と出力してくだい。
  */

  $array1 = array(1,2,3,4,5);
  foreach ($array1 as $value1){
  }

  $i=0;
  $array2 = array(6,7,8,9,10);
  foreach ($array2 as $value2){
    echo 4*$array2[4]+$array1[$i]."\n";
    $i++;
  }

?>
