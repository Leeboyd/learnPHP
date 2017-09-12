<?php

require 'functions.php';

// part 2
require 'Task.php';


$pdo = connectToDB('root', 'camax20170406');

$statement = $pdo->prepare('select * from todos');

$statement->execute();

// part 1, :: static method
// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// part 2
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';