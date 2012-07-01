<?php

  $subject = "abcdef";
  $pattern = '/^a/';
  preg_match($pattern, $subject, $matches);
//  print_r($matches);
//  print($matches);


  $subject2 = "http://www.yahoo.co.jp/top/kyagi.jpg";
  $subject3 = "http://www.yahoo.com/top/kyagi.jpg";

//  $pattern_all = '/www/';  // => "www"
//  $pattern_all = '/[^\/]*/';  // => "http:"
//  $pattern_all = '/[^w]*/';  // => "http://"

//=> "www.yahoo.co.jp"
//=> "www.yahoo.com"
//  $pattern_all = '/w[^\/]*/';  

// without using "w"
// match "kyagi.jpg"
  $pattern_all = '/k[^\/]*/';
//  $pattern_all = '/k[^\.]*/';  // => kyagi
  
  preg_match($pattern_all, $subject2, $matches2);
  preg_match($pattern_all, $subject3, $matches3);
  print_r($matches2); 
  print_r($matches3); 


?>
