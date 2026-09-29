<?php
namespace App\Helpers;

class Router {
    private $routes = [];

    public function add($method, $route, $handler) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'route' => $route,
            'handler' => $handler
        ];
    }

    public function get($route, $handler) {
        $this->add('GET', $route, $handler);
    }

    public function post($route, $handler) {
        $this->add('POST', $route, $handler);
    }

    public function dispatch($uri, $method) {
        $uri = parse_url($uri, PHP_URL_PATH);
        
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->match($route['route'], $uri, $params)) {
                return $this->callHandler($route['handler'], $params);
            }
        }
        
        // 404
        http_response_code(404);
        echo "404 Not Found";
    }

    private function match($route, $uri, &$params) {
        // Convert route parameters like {id} to regex
        $routeRegex = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[a-zA-Z0-9_-]+)', $route);
        $routeRegex = "#^" . $routeRegex . "$#";
        
        if (preg_match($routeRegex, $uri, $matches)) {
            $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
            return true;
        }
        return false;
    }

    private function callHandler($handler, $params) {
        if (is_callable($handler)) {
            return call_user_func_array($handler, $params);
        }
        
        if (is_string($handler)) {
            list($controller, $method) = explode('@', $handler);
            $controllerClass = "App\\Controllers\\" . $controller;
            if (class_exists($controllerClass)) {
                $controllerInstance = new $controllerClass();
                if (method_exists($controllerInstance, $method)) {
                    return call_user_func_array([$controllerInstance, $method], $params);
                }
            }
        }
        
        throw new \Exception("Handler not found for route");
    }
}
