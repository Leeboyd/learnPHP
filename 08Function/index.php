<?php

require 'functions.php';

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");

dieAndDone($stack);

// require 'index.view.php';