<?php

$app = [];

$app['config'] = require 'config.php';

// 使用 composer 整理相依，不需要再分別引入了

// require 'core/Router.php';

// require 'core/Request.php';

// require 'core/database/Connection.php';

// require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);