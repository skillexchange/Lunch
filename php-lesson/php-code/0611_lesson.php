<?php

  $subject = "abcdef";
  $pattern = '/^a/';
  preg_match($pattern, $subject, $matches);
  print_r($matches);
//  print($matches);

  $subject2 = "http://www.yahoo.co.jp/top/kyagi.jpg";
  $pattern2 = "/www.yahoo.co.jp/";
  preg_match($pattern2, $subject2, $matches2);
  print_r($matches2); //=> "www.yahoo.co.jp"

?>
