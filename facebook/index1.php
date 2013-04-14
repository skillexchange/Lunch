<html>

<head>

</head>

<body>

<div class="header">
  <h1>
    List of Liked Photo
  </h1>
</div>


<div class="photo">

<?php 

  require 'facebook.php';

  $facebook = new Facebook(array(
    'appId'  => '',
    'secret' => '',
  ));

// Get User ID
  $user = $facebook->getUser();
  $url = $facebook->getLoginUrl(array('scope'=>'publish_stream,read_stream'));

  echo $user;
  echo '<br><a href="'.$url.'">URL</a><br>';

// fql exercise: SELECT "parameter" FROM "table" WHERE "operator" ex.if A=B
//  $fql = 'SELECT user_id FROM like WHERE object_id="505457149478641"';
//  $fql = "SELECT object_id FROM like WHERE user_id=me()";
//  $fql = "SELECT name, type FROM page WHERE type IN ('TV SHOW') AND page_id IN (SELECT page_id FROM page_fan WHERE uid = me())";
//  $fql = "SELECT user_id, object_id, object_type FROM like WHERE user_id=me()";
//  $fql = "SELECT object_id FROM photo WHERE owner_id=me()";

//  $fqlResults = $facebook->api(array(
//    'method' => 'fql.query',
//    'query' =>$fql,
//  ));
//  print_r($fqlResults);

  $fqlResults = $facebook->api(array(
    'method' => 'fql.multiquery',
    'queries' =>array(
    'q1'=> "SELECT user_id, object_id, object_type FROM like WHERE user_id=me()",
    'q2'=> "SELECT owner,src_small,src_big,created, owner FROM photo WHERE object_id IN (SELECT object_id FROM #q1)",
    'q3'=> "SELECT username,uid FROM user WHERE uid IN (SELECT owner FROM #q2)"
  )));

//  foreach($fqlResults as $keyA => $valA){
//    foreach($valA as $keyB => $valB){
//      foreach($valB as $keyC => $valC){
//        echo '<img src = "'.$valC['src_big'].'"><br>';
//        echo '<p>'.$valC['username'].'</p>';
// '<p>uploaded on'.date("Y/m/d D", $valC["created"]).'at'.date("H:i:s", $valC["created"]).'</p>';
//          $valC["username"];    
//          <p>'.date("Y/m/d D H:i:s",$valC["created"]).'</p>
//      }
//    }
//  }
//  print_r($fqlResults);

//  echo '<html><body><img src = "'.($fqlResults[1][fql_result_set][0][src_big]).'"></body></html>';
//  echo $fqlResults[2][fql_result_set][0][username];
  
  foreach($fqlResults[1][fql_result_set] as $key1 => $val1){
    $photolist[$val1['owner']]['src_big'] = $val1['src_big'];  
    $photolist[$val1['owner']]['created'] = $val1['created'];  
  };     

   echo '<img src = "'.$val1["src_big"].'"><br>
         <p>'.date("Y/m/d D H:i:s",$val1["created"]).'</p>';

//  foreach($fqlResults[2][fql_result_set] as $key2 => $val2){
//    echo '<p>'.$val2["username"].'</p>';
//  };

  foreach($fqlResults[2][fql_result_set] as $key2 => $val2){
    $photolist[$val2['uid']]['username'] = $val2['username'];
  };

//  print_r($photolist);
?>

</div>

<div class="footer">

</div>

</body>
</html>

