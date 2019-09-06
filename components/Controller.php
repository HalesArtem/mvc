<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 17.07.19
 * Time: 19:37
 */

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function actionIndex();
}
