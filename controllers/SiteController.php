<?php
/**
 * Created by PhpStorm.
 * User: oculus
 * Date: 17.07.19
 * Time: 19:33
 */

class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->render('site/index');
    }

    public function actionContacts()
    {
        $this->view->render('site/contacts', ['title' => 'Contacts']);
    }
}