<?php
// entry point
require 'core/boot.php';

// $router = new Router;

// require 'routes.php';



// var_dump($uri);

// require $router->direct($uri);

require Router::load('routes.php')
  ->direct(Request::uri());
