<?php

class Router {
  public $routes = [
    'GET' => [],
    'POST' => []
  ];

  public static function load($file) {
    // 靜態方法，不是 instance 方法，scope 為 global
    $router = new static; // new self 可以想成 new Router
    require $file;
    
    // return $this 不行，原因上述
    return $router;
  }

  public function get($uri, $controller) {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri, $requestType) {
    if (array_key_exists($uri, $this->routes[$requestType])) {
      return $this->routes[$requestType][$uri];
    }

    throw new Exception('no route defined for this URI.');
  }
}
