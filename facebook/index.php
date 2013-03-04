<html>

<header>

</header>

<body>

<?php 

  require 'facebook.php';
  require 'appkey.php';

  $facebook = new Facebook(array(
    'appId'  => $appkey[appId],
    'secret' => $appkey[secret],
  ));

  echo '<h1>List of my "Liked" objects on Facebook</h1>';

// Get User ID
  $user = $facebook->getUser();
    if ($user == ""){
      $url = $facebook->getLoginUrl(array('scope'=>'publish_stream,read_stream'));
    }  
  
  if ($user == ""){
    echo '<a href="'.$url.'">URL</a>';
  }
  else{
    echo '<p>User ID: '.$user.'</p>';
  }

  $fqlResults = $facebook->api(array(
    'method' => 'fql.multiquery',
    'queries' => array(
      'q1' => "SELECT object_id FROM like WHERE user_id = me()",
    )));

  print_r($fqlResults);


// Request multi query
//  $fqlResults = $facebook->api(array(
//    'method' => 'fql.multiquery',
//    'queries' =>array(
//    'q1'=> "SELECT user_id, object_id, object_type FROM like WHERE user_id = me()",
//    'q2'=> "SELECT owner, src_small, src_big, created, object_id FROM photo WHERE object_id IN (SELECT object_id FROM #q1)",
//    'q3'=> "SELECT username, uid FROM user WHERE uid IN (SELECT owner FROM #q2)"
//  )));

//  print_r($fqlResults);

?>

</body>

</html>
