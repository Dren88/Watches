<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 01.07.2021
 * Time: 22:58
 */

namespace ishop;


class Db
{
    use TSingletone;

    protected function __construct(){
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!\R::testConnection()){
            throw new \Exception("Нет соединения с БД", 500);
        }else{
//            echo 'Соединение установлено';
        }
        \R::freeze();
        if(DEBUG){
            \R::debug(true, 1);
        }
    }
}