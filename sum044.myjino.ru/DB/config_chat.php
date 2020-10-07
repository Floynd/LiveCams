<?php

$dbhost = "sum044.myjino.ru";
$dbname = "sum044_cams";
$dbuser = "sum044";
$dbpass = 'geforce11';

try {
  $db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname", "$dbuser", "$dbpass");
} catch (PDOException $e) {
  echo $e->getMessage();
}
