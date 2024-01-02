<?php

namespace Baezeta\ZaphCore\Core\Routing;

use Baezeta\ZaphCore\Core\Core;

class Routes
{
    static array $routes = [];
    private static string $prefix = '';

    public function getRoutesRegistered()
    {
        return self::$routes;
    }
    
    public static function group(string $uri, callable $callback)
    {
        self::$prefix .= $uri;
        $callback(new self());
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
