<?php

require_once '../config.php';

try {
  $conn = new PDO("mysql:host=$db_host;dbname=$db_name;dbport=$db_port", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die;
}