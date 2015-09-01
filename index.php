<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    echo "Hello anonymous, try /yourname";
});

$app->get('/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();

?>