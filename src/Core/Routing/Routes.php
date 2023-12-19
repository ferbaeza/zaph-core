<?php

namespace Baezeta\ZaphCore\Core\Routing;

use Baezeta\ZaphCore\Core\Core;

class Routes
{
    static array $routes = [];

    public static function group(string $uri, callable $callback)
    {
        $callback(new self());
        // dd(self::$routes);
    }
    
    public function get(string $uri, array $controller)
    {
        self::$routes[] = [
            'method' => 'GET',
            'uri' => $uri,
            'controller' => $controller
        ];
    }
}
