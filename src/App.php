<?php

namespace Baezeta\ZaphCore;

use PDO;
use Baezeta\ZaphCore\Core\Core;
use Baezeta\ZaphCore\Core\Routing\Routes;
use Baezeta\ZaphCore\Core\Container\Container;
use Baezeta\Psql\Connect\Interface\DatabaseInterface;
use Baezeta\ZaphCore\Core\DataBase\DefaultDatabaseConnection;

class App
{
    public static $app;
    public ?Routes $routes;
    public ?PDO $connection = null;
    // public ?DatabaseInterface $database;


    public static function bootstrap():self
    {
        $app = self::$app ?? self::$app = new self();
        $app = register(self::class);
        $app->routes = register(Routes::class);
        // $app->database = Container::resolve(DatabaseInterface::class);
        return $app;
    }

    
    public function get(string $uri, array $controller)
    {
        $this->routes->get($uri, $controller);
    }

    public function getConnection()
    {
        if($this->connection === null){
             $default = DefaultDatabaseConnection::connect();
        }

        // self::$app->database = singleton(DatabaseInterface::class);
        // $this->connection = self::$app->database->connect($default);
    }

    public function run()
    {
        // dd(Container::getInstances());
        // dd($this->connection?? null);
        // dd($this->routes->getRoutesRegistered());
        $response = "Aplication Resolve Routes";
        dd(Container::getInstances(), $response);
        echo PHP_EOL . "Aplication Resolve Routes" . PHP_EOL;
    }

}
