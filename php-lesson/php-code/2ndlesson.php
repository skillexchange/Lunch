<?php
  /**
   * REWIND
   * number,
   */
  $i = 1 + 1;
  /**
   * increment, decrement
   */
  $i++;
  $i--;

  /**
   * control statement
   * if,else
   */
<<<<<<< HEAD
  if($i==1){
      echo 'i is 1'."\n"; 
  }else{
      echo 'i is not 1'."\n"; 
  }
=======
//  if($i==1){
//      echo 'i is 1'."\n"; 
//  }else{
//      echo 'i is not 1'; 
//  }
>>>>>>> cddedf1939eb3badd0cdcc0cc8b23eaade0fd18c

  /**
   * string
   *
   * ""で囲まれたものと''で囲まれた物
   * \t タブ, \n 改行
   * エスケープしたい場合は\を追加
   */
  $text="messy\tmessy\n";
  //echo $text;
  $text="messy\\tmessy\\n";
  //echo $text;
  $text='messy\tmessy\n';
  //echo $text;
  
  /**
   * concatenation
   */
  $text="messy";
  //echo 'How '.$text.' we are?'."\n";

  //echo "$text 120%\n"; 
  //変数につながる場合
  //echo "{$text}!!!!!\n";  


<<<<<<< HEAD
    echo strlen('messy')."\n";
    echo mb_strlen('メッシー')."\n";
    echo mb_strwidth('メッシー')."\n";
    echo mb_strlen('メッシー')."\n";
=======
  //echo strlen('messy')."\n";
  //echo mb_strlen('メッシー','UTF8')."\n";
>>>>>>> cddedf1939eb3badd0cdcc0cc8b23eaade0fd18c

  $index = strpos('messy', 'sy');
    echo $index."\n";
  $substr = substr('messy', 0, 2);
    echo $substr."\n";
  
  /**
   * 配列と連想配列
   */
  $array = array('m', 'e', 's', 's', 'y');
  echo $array[0]."\n";
  echo count($array)."\n";
  
  $first=array_shift($array);
   var_dump($array);
   echo $first;
  
  $end=array_pop($array);
<<<<<<< HEAD
   var_dump($array);
   echo $end;
=======
   // var_dump($array);
   //var_dump($end);
>>>>>>> cddedf1939eb3badd0cdcc0cc8b23eaade0fd18c

  $array = array('m' => 1,  'e' => 2, 's' => 3); 
  echo $array['e']."\n";
  echo count($array)."\n";


  /**
   * foreach
   */
  $array = array('m', 'e', 's', 's', 'y');
  foreach ($array as $value){
    echo $value."\n"; 
  } 

  $array = array('m'=>1, 'e'=>2, 's'=>3, 'y'=>4);
  foreach ($array as $key => $value){
    echo $key.":".$value."\n"; 
  } 
?>
