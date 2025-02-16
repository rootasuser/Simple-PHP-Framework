<?php

require '../vendor/autoload.php';

use App\App;

$app = new App();

// Define routes
$app->get('/', function () {
    return "Welcome to My PHP Framework!";
});

$app->get('/about', function () {
    return "This is a simple PHP framework.";
});

$app->run();
