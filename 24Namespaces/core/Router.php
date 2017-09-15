<?php

namespace App\Core;

class Router {
  public $routes = [
    // 'GET' => [],
    // 'POST' => []
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
      // PageController@home 
      // 不是用之前的 return $this->routes[$requestType][$uri];

      return $this->callAction(
        // ... spread, explode 拆字串成陣列
        ...explode('@', $this->routes[$requestType][$uri])
      );
    }

    throw new Exception('no route defined for this URI.');
  }

  protected function callAction($controller, $action) {
    // "PageController"  "addTask"
    $controller = "App\\Controllers\\${controller}";

    $controller = new $controller;

    if (!method_exists($controller, $action)) {
      
      throw new Exception("${controller} does not respond to the ${action}.");
    }

    return $controller->$action();
  }
}
