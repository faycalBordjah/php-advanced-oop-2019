<?php
declare(strict_types=1);

use controllers\HomeController;
use core\Concert;
use core\Routing;
use core\View;

function myAutoloader($class)
{
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    $classModel = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($classPath)) {
        include $classPath;
    } elseif (file_exists($classModel)) {
        include $classModel;
    }
}

spl_autoload_register('myAutoloader');

$container = [
    View::class => function ($container) {
        return new View('homepage');
    },
    HomeController::class => function ($container) {
        return new HomeController();
    },
    Concert::class => function () {
        return new Concert("queen", "roc", "gga");
    }

];

$slug = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = Routing::getRoute($slug);
echo $slug;

extract($routes);

if (file_exists($cPath)) {
    include $cPath;

    $c = 'controllers\\' . $c;

    if (class_exists($c)) {
        //instancier dynamiquement le controller
        $cObject = $container[$c]($container);
        //vérifier que la méthode (l'action) existe
        if (method_exists($cObject, $a)) {
            //appel dynamique de la méthode
            $cObject->$a();
        } else {
            die('La methode ' . $a . " n'existe pas");
        }
    } else {
        die('La class controller ' . $c . " n'existe pas");
    }
} else {
    die('Le fichier controller ' . $c . " n'existe pas");
}

?>