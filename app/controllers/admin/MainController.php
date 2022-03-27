<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 04.08.2021
 * Time: 22:27
 */

namespace app\controllers\admin;


use app\models\User;

class MainController extends AppController
{
    public function indexAction(){
        $countNewOrders = \R::count('order', "status = '0'");
        $countUsers = \R::count('user');
        $countProducts = \R::count('product');
        $countCategories = \R::count('category');
        $this->setMeta('Панель управления');
        $this->set(compact('countUsers', 'countNewOrders', 'countCategories', 'countProducts'));
    }

}