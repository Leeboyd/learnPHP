<?php

class Task {
  protected $description;

  protected $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function isComplete() {
    return $this->completed;
  }

  public function complete() {
    $this->completed = true;
  }

  public function accessDescription() {
    return $this->description;
  }
}

// ------------------------------
// step 1 初始化
// ------------------------------

// $task = new Task('Go shopping'); // a new task object

// $task->complete();

// var_dump($task);

// var_dump($task->isComplete());

// ------------------------------
// step 2 陣列，渲染
// ------------------------------
$tasks = [
  new Task('Practical Fresh Cheese'),
  new Task('Rustic Rubber Bacon'),
  new Task('Small Metal Tuna')
];

$tasks[1]->complete();

// var_dump($tasks);

require 'index.view.php';