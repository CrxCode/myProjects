<?php

namespace Controller;

class Route
{

    static $routes = [];

    public static function get($action, $callback)
    {
        self::$routes;
        $action = trim($action, '/');
        self::$routes[$action] = $callback;
    }

    public static function run($action)
    {
        self::$routes;
        $action = trim($action, '/');
        $callback = self::$routes[$action];
        echo call_user_func($callback);
    }
}
