<?php

echo $argv[0];
echo $argv[1];
echo $argv[2];


try {
  $pdo = new PDO("mysql:host=localhost; dbname=test;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock","root","root");
//  $stmt = $pdo->query("SELECT*FROM team_messy");
  $stmt1 = $pdo->query("SELECT first_name FROM team_messy WHERE status = 'pretty good'");

  while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
    echo implode(",",$row) . PHP_EOL;
  }

  $pdo->query("INSERT INTO team_messy (first_name) VALUES ('yusuke')");
  $stmt2 = $pdo->query("SELECT first_name FROM team_messy");

  while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
    echo implode(",",$row) . PHP_EOL;
  }
 
  $pdo->query("DELETE FROM team_messy WHERE first_name = 'yusuke'");
  $stmt3 = $pdo->query("SELECT first_name FROM team_messy");
 
  while($row = $stmt3->fetch(PDO::FETCH_ASSOC)){
    echo implode(",",$row) . PHP_EOL;
  } 

} 

catch (PDOException $e){
  var_dump($e->getMessage());
}

$pdo = null;

?>
