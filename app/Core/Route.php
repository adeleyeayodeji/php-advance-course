<?php

namespace App\Core;

class Route
{
    public static $routes = [];

    //route handler
    public static function routeHandler($uri, $controlargs, $method)
    {
        //convert uri to preg
        if (preg_match_all('/\{[a-zA-Z0-9]+\}/', $uri, $matches)) {
            //convert to dynamic regex
            $uri2 = preg_replace('/\{[a-zA-Z0-9]+\}/', '([a-zA-Z0-9]+)', $uri);
            //escape /
            $uri2 = str_replace('/', '\/', $uri2);
            //add start and end
            $uri2 = '/^' . $uri2 . '$/';
        } else {
            $uri2 = $uri;
            $matches = false;
        }
        //save route
        self::$routes[] = [
            'uri' => $uri,
            'preg' => $uri2,
            'matches' => $matches,
            'controlargs' => $controlargs,
            'method' => $method
        ];
    }

    //get
    public static function get($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs, 'GET');
    }

    //post
    public static function post($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs, 'POST');
    }

    //put
    public static function put($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs, 'PUT');
    }

    //delete
    public static function delete($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs, 'DELETE');
    }

    //any
    public static function any($uri, $controlargs)
    {
        self::routeHandler($uri, $controlargs, 'ANY');
    }

    //404
    public static function notFound()
    {
        echo '404';
    }

    //404 header
    public static function notFoundHeader()
    {
        echo "No route found for this request";
    }

    //class not found
    public static function classNotFound($class)
    {
        echo "'$class' not found";
    }

    //run
    public static function run()
    {
        echo '<pre>';
        var_dump(self::$routes);
        echo '</pre>';
    }
}
