<?php

namespace App;

class App
{
    protected $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
    }

    public function get($route, $callback)
    {
        $this->router->addRoute('GET', $route, $callback);
    }

    public function post($route, $callback)
    {
        $this->router->addRoute('POST', $route, $callback);
    }
}
