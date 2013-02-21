<html>

<header>

</header>

<body>

<?php 

  require 'facebook.php';

  $facebook = new Facebook(array(
    'appId'  => '476325702386495',
    'secret' => '841996a588d4f031a4f52791118c0e59',
  ));

  echo '<h1>List of "Liked" Photos on Facebook</h1>';

// Get User ID
  $user = $facebook->getUser();
  $url = $facebook->getLoginUrl(array('scope'=>'publish_stream,read_stream'));

  echo '<p>User ID: '.$user.' <a href="'.$url.'">URL</a></p>';

// Request multi query
  $fqlResults = $facebook->api(array(
    'method' => 'fql.multiquery',
    'queries' =>array(
    'q1'=> "SELECT user_id, object_id, object_type FROM like WHERE user_id= me()",
    'q2'=> "SELECT owner, src_small, src_big, created, FROM photo WHERE object_id IN (SELECT object_id FROM #q1) limit 0,10",
    'q3'=> "SELECT username, uid FROM user WHERE uid IN (SELECT owner FROM #q2)"
  )));

//  print_r($fqlResults);

// Create dateset 

  foreach($fqlResults[1]['fql_result_set'] as $key1 => $val1){
    $photolist[$val1['object_id']]['src_small'] = $val1['src_small'];  
    $photolist[$val1['object_id']]['created'] = $val1['created'];  
    $photolist[$val1['object_id']]['owner'] = $val1['owner'];
  }     

  foreach($photolist as $key3 => $val3){
    foreach($fqlResults[2]['fql_result_set'] as $key2 => $val2){
      if ($val2['uid'] == $val3['owner']){
        $photolist[$key3]['username'] = $val2['username'];
      }
    }
  }

  foreach($photolist as $key4 => $val4){
    if (!isset($val4['username'])){
      $photolist[$key4]['username'] = 'unknown';
    }
  }

  foreach($photolist as $key5 => $val5){
    $time[$key5]['created'] = $val5['created'];
  }

  arsort($time);
  
//  foreach($time as $key6 => $val6){
//    echo '<img src = "'.$photolist[$key6]["src_small"].'"><br>
//      <p>'.$photolist[$key6]["username"].'</p>    
//      <p>'.date("m/d D", $val6["created"]).', '.date("H:i:s", $val6["created"]).'</p>';
//  }

  print_r($photolist);
//  print_r($time);

?>

</body>

</html>
