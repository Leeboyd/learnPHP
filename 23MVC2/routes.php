<?php

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about');
$router->get('addTask', 'PageController@addTask');


$router->get('tasks', 'TasksController@index');
$router->post('addtask', 'TasksController@insert');
