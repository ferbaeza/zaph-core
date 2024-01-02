<?php

namespace Baezeta\ZaphCore\Core\DataBase;

use PDO;
use Baezeta\Psql\Connect\Connector\ConnectorDTO;
use Baezeta\Psql\Connect\Connector\DatabaseConnection;

class DefaultDatabaseConnection
{
    public static function params(): ConnectorDTO
    {
        return new ConnectorDTO(
                driver: 'pgsql',
                host: 'postgres',
                port: '5432',
                database: 'fastphp',
                username: 'zataca',
                password: 'zataca',
            );
    }

    public static function connect()
    {
        $database = new DatabaseConnection();
        $connection = $database->addConnection(self::params());
        return $connection;
    }
}
