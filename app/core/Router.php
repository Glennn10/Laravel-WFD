<?php
class Router
{
    private $routes = [];

    public function add($route, $controller, $method)
    {
        $this->routes[$route] = [$controller, $method];
    }

    public function dispatch($route)
    {
        if (!isset($this->routes[$route])) {
            http_response_code(404);
            require __DIR__ . '/../views/404.php';
            return;
        }

        [$controller, $method] = $this->routes[$route];
        (new $controller())->$method();
    }
}
