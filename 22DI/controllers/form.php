<?php
App::get('database')->insert('todos', [
  'description' => $_POST['description']
]);

header('Location: /');