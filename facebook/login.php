<?php 

  require 'facebook.php';

  $facebook = new Facebook(array(
    'appId'  => '476325702386495',
    'secret' => '841996a588d4f031a4f52791118c0e59',
  ));

// Get User ID
  $user = $facebook->getUser();
  $url = $facebook->getLoginUrl(array('scope'=>'publish_stream,read_stream'));

  echo $user;
  echo '<html><body><a href="'.$url.'">URL</a><br></body></html>';

 // Request multi query
   $fqlResults = $facebook->api(array(
     'method' => 'fql.multiquery',
     'queries' =>array(
     'q1'=> "SELECT user_id, object_id, object_type FROM like WHERE user_id= me()",
//     'q2'=> "SELECT owner, src_small, src_big, created, object_id FROM photo WHERE object_id IN (SELECT object_id FROM #q1)",
//     'q3'=> "SELECT username, uid FROM user WHERE uid IN (SELECT owner FROM #q2)"
   )));
 
  print_r($fqlResults);

?>
