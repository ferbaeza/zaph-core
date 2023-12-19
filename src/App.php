<?php

namespace Baezeta\ZaphCore;

use Baezeta\ZaphCore\Core\Core;
use Baezeta\ZaphCore\Core\Routing\Routes;

class App
{
    public Routes $routes;
    public function __construct()
    {
        Core::bootstrap();
        $this->routes = new Routes();
    }
    
    public function get(string $uri, array $controller)
    {
        $this->routes->get($uri, $controller);
    }

    public function run()
    {
        //Aplication Resolve Routes
        echo PHP_EOL . "Aplication Resolve Routes" . PHP_EOL;
    }

}
