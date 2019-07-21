<?php


namespace core;


class Routing
{
    public static $routeFile = 'routing.yml';

    public static function getRoute($slug)
    {
        $routes = yaml_parse_file(self::$routeFile);

        if (isset($routes[$slug])) {
            if (empty($routes[$slug]['controller']) || empty($routes[$slug]['action'])) {
                die('Il y a une erreur dans le fichier routes.yml');
            }
            $class = ucfirst($routes[$slug]['controller']) . 'Controller';
            $a = $routes[$slug]['action'] . 'Action';
            $cPath = 'controllers/' . $class . '.php';
        } else {
            return ['c' => null, 'a' => null, 'cPath' => null];
        }

        return ['c' => $class, 'a' => $a, 'cPath' => $cPath];
    }

    public static function getSlug($c, $a)
    {
        $routes = yaml_parse_file(self::$routeFile);

        foreach ($routes as $slug => $cAndA) {
            if (!empty($cAndA['controller']) &&
                !empty($cAndA['action']) &&
                $cAndA['controller'] == $c &&
                $cAndA['action'] == $a) {
                return $slug;
            }
        }

        return null;
    }

}