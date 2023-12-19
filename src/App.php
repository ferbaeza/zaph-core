<?php

namespace Baezeta\ZaphCore;

class App
{

    public string $routes;

    public function run()
    {
        dd("hello");
    }

    public function routes()
    {
        return $this->routes = 'routes php App';
    }

}