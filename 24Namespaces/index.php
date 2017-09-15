<?php
// entry point (composer autoload, 資料庫...)
require 'vendor/autoload.php';

require 'core/boot.php';

// 可以這樣寫，指定 namespace
// App\Core\Router::load('routes.php')
//   ->direct(App\Core\Request::uri(), App\Core\Request::method());

// 但這樣定義更精簡
use App\Core\{Router, Request};

Router::load('routes.php')
  ->direct(Request::uri(), Request::method());