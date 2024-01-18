<?php

use Baezeta\ZaphCore\App;
use Baezeta\ZaphCore\Core\Container\Container;


/**
 * app es un helper para obtener la instancia de App
 * @param  string $class
 * @return mixed
 */
if (!function_exists('resolve')) {
    function resolve(string $class = App::class): mixed
    {
        return Container::resolve($class);
    }
}

if (!function_exists('register')) {
    function register(string $class, $build = null)
    {
        return Container::singleton($class, $build);
    }
}


if (!function_exists('singleton')) {
    function singleton(string $class = App::class, string|callable|null $build = null): mixed
    {
        return Container::singleton($class, $build);
    }
}

if (!function_exists('get')) {
    function get(string $class)
    {
        return Container::get($class);
    }
}


if (!function_exists('getInstances')) {
    function getInstances()
    {
        return Container::getInstances();
    }
}
