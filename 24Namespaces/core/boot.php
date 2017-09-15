<?php

// 讓 php 知道 現在說的 App 是哪個 namespace
use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

function view($name, $data = []){
  // [$tasks => []]
  // extract $tasks = [];
  extract($data);
  
  return require "views/${name}.view.php";
}

function redirect ($path) {
  return header("Location: /${path}");  
}