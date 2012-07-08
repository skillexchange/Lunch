<?php

// preg_match と $matches を利用して以下の文字列を抽出してください
//
// http://www.yahoo.co.jp:80/users/hide/icon/1.jpg
// http://summerwind.jp:8080/users/summerwind/icon/1.png
// http://shisobu.in:443/users/youzaka/icon/1.gif
//
// 1. ドメインを抽出してください
// 　　例: www.yahoo.co.jp, summerwind.jp, shisobu.in
// 2. パスを抽出してください
// 　　例: /users/hide/icon/1.jpg, /users/summerwind/icon/1.jpg
// 3. 拡張子を抽出してください
// 　　例: .jpg, .png, .gif
// 4. ポート番号を抽出してください
// 　　例: 80, 8080, 443
// 5. 1-4 を全て抽出可能なパターンを書いて下さい

  $subject1 = "http://www.yahoo.co.jp:80/users/hide/icon/1.jpg";
  $subject2 = "http://summerwind.jp:8080/users/summerwind/icon/1.png";
  $subject3 = "http://shisobu.in:443/users/youzaka/icon/1.gif";

//  $pattern1 = '/\/\/[^\:]*/';  //  ==> //www.yahoo.co.jp, //summerwind.jp
//  $pattern1 = '/\.[^\:]*/';  //  ==> .yahoo.co.jp, .jp, .in
  $pattern1 = '/^http:\/\/([^\:]*)/';   

  preg_match($pattern1, $subject1, $matches1);
  preg_match($pattern1, $subject2, $matches2);
  preg_match($pattern1, $subject3, $matches3);
  print_r($matches1[1]."<br/>");
  print_r($matches2[1]."<br/>");
  print_r($matches3[1]."<br/><br/>");

  $pattern2 = '/^http:\/\/(([^\:]*)[^\/]*([^\:]*))/';

  preg_match($pattern2, $subject1, $matches2_1);
  preg_match($pattern2, $subject2, $matches2_2);
  preg_match($pattern2, $subject3, $matches2_3);
  print_r($matches2_1[3]."<br/>");
  print_r($matches2_2[3]."<br/>");
  print_r($matches2_3[3]."<br/><br/>");

  $pattern3 = '/^http:\/\/(([^\:]*)[^\/]*[^\.]*([^\:]*))/';

  preg_match($pattern3, $subject1, $matches3_1);
  preg_match($pattern3, $subject2, $matches3_2);
  preg_match($pattern3, $subject3, $matches3_3);
  print_r($matches3_1[3]."<br/>");
  print_r($matches3_2[3]."<br/>");
  print_r($matches3_3[3]."<br/><br/>");

  $pattern4 = '/^http:\/\/(([^\:]*):([^\/]*)[^\.]*([^\:]*))/';

  preg_match($pattern4, $subject1, $matches4_1);
  preg_match($pattern4, $subject2, $matches4_2);
  preg_match($pattern4, $subject3, $matches4_3);
  print_r($matches4_1[3]."<br/>");
  print_r($matches4_2[3]."<br/>");
  print_r($matches4_3[3]."<br/><br/>");


  $pattern_all = '/^http:\/\/(([^\:]*):([^\/]*)([^\.]*([^\:]*)))/';

  preg_match($pattern_all, $subject1, $matches_all1);
  preg_match($pattern_all, $subject2, $matches_all2);
  preg_match($pattern_all, $subject3, $matches_all3);

//  print_r($matches_all1);
//  print_r($matches_all2);
//  print_r($matches_all3);

  print_r($matches_all1[2]."<br/>");
  print_r($matches_all1[4]."<br/>");
  print_r($matches_all1[5]."<br/>");
  print_r($matches_all1[3]."<br/><br/>");

  print_r($matches_all2[2]."<br/>");
  print_r($matches_all2[4]."<br/>");
  print_r($matches_all2[5]."<br/>");
  print_r($matches_all2[3]."<br/><br/>");

  print_r($matches_all3[2]."<br/>");
  print_r($matches_all3[4]."<br/>");
  print_r($matches_all3[5]."<br/>");
  print_r($matches_all3[3]."<br/><br/>");

?>

