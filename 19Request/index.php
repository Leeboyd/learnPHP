<?php
// entry point
require 'core/boot.php';

require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
