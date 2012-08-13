<?php

try {
  $pdo = new PDO("mysql:host=localhost; dbname=test;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock","root","root");
  $stmt = $pdo->query("SELECT*FROM team_messy");

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo implode(",",$row) . PHP_EOL;
  }
} catch (PDOException $e){
  var_dump($e->getMessage());
}

$pdo = null;

?>
