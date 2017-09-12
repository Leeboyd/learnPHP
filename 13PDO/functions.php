<?php

function dieAndDone ($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function connectToDB ($account, $password) {
  try {
    return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', $account, $password);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  
}