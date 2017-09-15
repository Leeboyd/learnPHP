<?php

  class TasksController {
    public function index() {
      $tasks = App::get('database')->selectAll('todos');

      return view('tasks', ['tasks' => $tasks]);
    }

    public function insert() {

      // Insert the task associated with the request

      // And then redirect back to all task

      App::get('database')->insert('todos', [
        'description' => $_POST['description']
      ]);
      
      return redirect('tasks');         
    }
  }