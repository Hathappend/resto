<?php

$routes = [];

function add($method, $path, $controller, $function, $middlewares = []): void {
    global $routes;
    $routes[] = [
        "method" => $method,
        "path" => $path,
        "controller" => $controller,
        "function" => $function,
        "middlewares" => $middlewares
    ];
}

function run(): void
{
    global $routes;

    $path = $_SERVER['REQUEST_URI'] ?? '/';
    $method = $_SERVER['REQUEST_METHOD'];

    foreach ($routes as $route) {
        $pattern = "#^" . $route['path'] . "$#";
        if (preg_match($pattern, $path, $variables) && $method == $route['method']) {

            foreach ($route['middlewares'] as $middleware) {
                if (function_exists($middleware)) {
                    call_user_func($middleware);
                } else {
                    echo "Invalid middleware function.";
                    return;
                }
            }

            $controllerPath = __DIR__ . "/../Controllers/{$route['controller']}.php";
            if (file_exists($controllerPath)) {
                require $controllerPath;
            } else {
                echo "Controller file not found.";
                return;
            }

            $function = $route['function'];

            array_shift($variables);

            if (function_exists($function)) {
                call_user_func_array($function, $variables);
            } else {
                echo "Function not found.";
            }
            return;
        }

        http_response_code(404);
    }
}
