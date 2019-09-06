<?php

class Application
{
    public function run()
    {
        $requestUri = $_SERVER['REQUEST_URI'];

        $routes = explode('/', $requestUri);

        // var_dump($routes);

        $controllerName = 'Site';
        $actionName = 'index';

        if (isset($routes[1]) && !empty($routes[1])) {
            $controllerName = ucfirst($routes[1]);
        }

        if (isset($routes[2]) && !empty($routes[2])) {
            $actionName = $routes[2];
        }

        $controllerName .= 'Controller';
        $actionName = 'action' . ucfirst($actionName);

        $controllerPath = '../controllers/' . $controllerName . '.php';

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        } else {
            $this->showError();
        }

        $controller = new $controllerName;

        if (method_exists($controller, $actionName)) {
            if (isset($routes[3])) {
                $controller->$actionName($routes[3]);
            } else {
                $controller->$actionName();
            }
        } else {
            $this->showError();
        }
    }

    public function showError()
    {
        die('Page not found');
    }
}