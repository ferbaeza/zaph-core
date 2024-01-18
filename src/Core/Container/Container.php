<?php

namespace Baezeta\ZaphCore\Core\Container;

class Container
{
    private static array $instances = [];

    public static function singleton(string $class, string|callable|null $build = null)
    {
        // dd($class, $build, self::$instances);

        $existClass = array_key_exists($class, self::$instances);
        if (!$existClass) {
            match (true) {
                is_null($build) => self::$instances[$class] = new $class(),
                is_string($build) => self::$instances[$class] = new $build(),
                is_callable($build) => self::$instances[$class] = $build(),
                is_object($build) => self::$instances[$class] = $build,
            };
        }
        return self::$instances[$class];
    }

    public static function getInstances(): array
    {
        return self::$instances;
    }

    public static function get(string $class)
    {
        return self::$instances[$class];
    }
    
    public static function resolve(string $class)
    {
        return self::$instances[$class] ?? new $class();
    }
}
