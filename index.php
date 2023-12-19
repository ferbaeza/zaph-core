<?php

use Baezeta\ZaphCore\App;
require_once __DIR__ . '/vendor/autoload.php';


class HomeController
{
    public function index()
    {
        echo "Hello world";
    }
}

$app = new App();
$routes = $app->routes;

// $routes::group('/api', function ($routes) {
//     $routes->get('/users', [HomeController::class, 'index']);
// });
$app->get('/', [HomeController::class, 'index']);

$app->run();