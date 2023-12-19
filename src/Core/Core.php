<?php

namespace Baezeta\ZaphCore\Core;

use Baezeta\ZaphCore\Core\Container\Container;

class Core
{
    public static function bootstrap()
    {
        $app = Container::singleton(self::class);
        $app->loadConfig();
        return $app;
    }

    public static function route(string $uri, array $controller)
    {
        echo "Route registered $uri con Controller $controller[0] y metodo $controller[1]";
    }

    /**
     * loadConfig es el metodo que carga las configuraciones en la instancia de app
     * @return self
     */
    protected function loadConfig(): self
    {
        // $data = Config::bootstrap(self::$rootDirectory);
        // app()->config = $data;
        return  $this;
    }
}
