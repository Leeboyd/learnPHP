<?php

class Router {
  protected $routes = [];

  public static function load($file) {
    // 靜態方法，不是 instance 方法，scope 為 global
    $router = new static; // new self 可以想成 new Router
    require $file;
    
    // return $this 不行，原因上述
    return $router;
  }

  public function define($route) {
    $this->routes = $route;
  }

  public function direct($uri) {
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    throw new Exception('no route defined for this URI.');
  }
}
