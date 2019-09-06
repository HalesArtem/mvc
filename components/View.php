<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 17.07.19
 * Time: 19:43
 */

class View
{
    public function render($template, $params = [], $layout = 'main')
    {
        extract($params);
        include '../views/layouts/' . $layout . '.php';
    }
}