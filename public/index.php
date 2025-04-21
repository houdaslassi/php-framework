<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;

// Initialize the router
$router = new Router();

// Define routes
$router->get('/', function() {
    $controller = new \App\Controllers\HomeController();
    $controller->index();
});

// Get the current request path and method
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Dispatch the request
$router->dispatch($method, $path);
