<?php
// entry point (composer autoload, 資料庫...)
require 'vendor/autoload.php';

require 'core/boot.php';

Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
