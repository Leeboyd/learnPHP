<?php

namespace App\Core;

class Request {
  public static function uri () {
    // parse_url
    //  { ["path"]=> string(8) "/addTask" ["query"]=> string(7) "coo=dll" } 
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }

  public static function method () {
    return $_SERVER['REQUEST_METHOD'];
  }
}