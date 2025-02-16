<?php

namespace App;

class Router
{
    private $routes = [];

    public function addRoute($method, $route, $callback)
    {
        $this->routes[$method][$route] = $callback;
    }

    public function dispatch($method, $uri)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes[$method][$uri])) {
            echo call_user_func($this->routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
