<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 25.08.2021
 * Time: 22:26
 */

namespace app\controllers\admin;


use ishop\Cashe;

class CacheController extends AppController
{
    public function indexAction(){
        $this->setMeta('Очистка кеша');
    }

    public function deleteAction(){
        $key = isset($_GET['key']) ? $_GET['key'] : null;
        $cache = Cashe::instance();
        switch ($key){
            case 'category':
                $cache->delete('cats');
                $cache->delete('ishop_menu');
                break;
            case 'filter':
                $cache->delete('filter_group');
                $cache->delete('filter_attrs');
                break;
        }
        $_SESSION['success'] = 'Выбранный кеш удален';
        redirect();
    }
}