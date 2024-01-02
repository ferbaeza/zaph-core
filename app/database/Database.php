<?php

namespace App\database;

use PDO;
use Baezeta\Psql\Connect\Connector\ConnectorDTO;
use Baezeta\Psql\Connect\Connector\DatabaseConnection;

class Database
{
    public static function connect()
    {
        $pdo = new ConnectorDTO(
                driver: 'pgsql',
                host: 'postgres',
                port: '5432',
                database: 'fastphp',
                username: 'zataca',
                password: 'zataca',
            );
        $database = new DatabaseConnection();
        $connection = $database->addConnection($pdo);
    }
}