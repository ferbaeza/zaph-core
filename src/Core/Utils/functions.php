<?php


use Baezeta\ZaphCore\Core\Container\Container;

if(!function_exists('register')) {
    function register(string $class, $build = null)
    {
        return Container::singleton($class, $build);
    }
}
