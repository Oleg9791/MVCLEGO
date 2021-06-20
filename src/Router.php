<?php


namespace App;


class Router
{
    public function run()
    {
        $type = $_GET['type'] ?? "Main";
        $action = "action" . ($_GET['action'] ?? "index");

        $controllerName = "App\\Controller\\$type";
        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $action)) {
                $controller->{$action}();
            } else {
                include __DIR__ . "/../templates/errors/404.php";

            }
        } else {
            include __DIR__ . "/../templates/errors/403.php";
        }
    }
}