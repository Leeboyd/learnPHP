<?php

$greeting = 'Hello';
$sanitize = htmlspecialchars($_GET['name']);

require 'index.view.php';