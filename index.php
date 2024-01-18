<?php

use Baezeta\ZaphCore\App;
use Baezeta\ZaphCore\Core\Container\Container;
use Baezeta\ZaphCore\Core\Configuration\Config;

require_once __DIR__ . '/vendor/autoload.php';


class HomeController
{
    public function index()
    {
        echo "Hello world";
    }

}
$app = App::bootstrap();
$app->use('json');
$app->set('config', Config::class);
$routes = $app->routes;

// $routes::group('/api', function ($routes) {
//     $routes->get('/users', [HomeController::class, 'index']);
// });
$app->get('/', [HomeController::class, 'index']);

$app->run();