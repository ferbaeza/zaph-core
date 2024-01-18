<?php

namespace Baezeta\ZaphCore\Core\Configuration;

class Config
{
    private static array $config = [];

    public static function getConfiguration()
    {
        return self::$config;
    }

    public static function set(string $key, mixed $value)
    {
        self::$config[$key] = $value;
    }

    public static function get(string $key)
    {
        return self::$config[$key] ?? null;
    }
}
