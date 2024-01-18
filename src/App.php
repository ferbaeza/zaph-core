<?php

namespace Baezeta\ZaphCore;

use PDO;
use Baezeta\ZaphCore\Core\Core;
use Baezeta\ZaphCore\Core\Routing\Routes;
use Baezeta\ZaphCore\Core\Container\Container;
use Baezeta\ZaphCore\Core\Configuration\Config;


class App
{
    public Routes $routes;
    // public string $nombre;
    public Config $config;
    public array $configuration;
    public array $privateConfiguration;
    
    // public Request $request;
    // public PhpServer $server;
    // public Session $session;



    public static function bootstrap()
    {
        $app = singleton(self::class);
        $app->routes = singleton(Routes::class);
        $app->config = singleton(Config::class);
        // $app->nombre = ("Baezeta");
        return $app;
    }

    public function use(string $nombre=null)
    {
        $app = resolve();
        $app->$nombre = $nombre;
    }

    
    public function get(string $uri, array $controller)
    {
        $this->routes->get($uri, $controller);
    }

    public function set(string $key, mixed $value)
    {
        $this->privateConfiguration[$key] = $value;
        Config::set($key, $value);
    }


    public function run()
    {
        $c = get(Config::class);
        $c->set('nombre', 'Baezeta');
        $this->configuration = $c::getConfiguration();
        dd($c::getConfiguration(), getInstances(), resolve(), 'run');

        //Aplication Resolve Routes
        echo PHP_EOL . "Aplication Resolve Routes" . PHP_EOL;
    }

}
