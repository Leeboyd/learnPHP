<?php

$query = require 'boot.php';

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

// ------------------------------------------
// 自行將資料 map 到 class
// ------------------------------------------
// $tasks = $query->selectAll('todos');

// $tasks = array_map(function ($task) {
//   $t = new Task();
//   $t->description = $task->description;
//   return $t;
// }, $tasks);

require 'index.view.php';