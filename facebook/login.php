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

?>
