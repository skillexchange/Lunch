<?php
/**
 *  formからテキストを受け取り(GETとPOST両方で)
 *  リクエストによって以下のhtmlを出し分けてください。
 *   受け付けたリクエストがnikuだったら $niku
 *   受け付けたリクエストがhawaiiだったら $hawaii
 *   受け付けたリクエストがkonnkatuだったら $konnkatu
 *
 *   $niku='<a href="http://www.flickr.com/photos/kyagyao/2727717819/" title="NEC_0990.jpg by kyagyao, on Flickr"><img src="http://farm4.staticflickr.com/3132/2727717819_96645dc166.jpg" width="500" height="375" alt="NEC_0990.jpg"></a>';
 *   $hawaii='<a href="http://www.flickr.com/photos/kyagyao/7168848025/" title="infinity pool by kyagyao, on Flickr"><img src="http://farm9.staticflickr.com/8006/7168848025_4e45474fa1.jpg" width="500" height="333" alt="infinity pool"></a>';
 *   $konnkatu='<a href="http://www.flickr.com/photos/take-wick/7424719998/" title="かまーたさん、ノリまくり by takewick, on Flickr"><img src="http://farm8.staticflickr.com/7248/7424719998_79ef626da1.jpg" width="500" height="374" alt="かまーたさん、ノリまくり"></a>';
 *
 *
 *   advance
 *   受け付けたリクエストの先頭がnikuだったら $niku
 *   受け付けたリクエストの先頭がhawaiiだったら $hawaii
 *   受け付けたリクエストの先頭がkonnkatuだったら $konnkatu
 *
 */

echo '<form action="" method="GET">'.
     '<input type="submit" name="get" value="get request">'.
     '</form>';

?>
