<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 20.07.2021
 * Time: 21:37
 */

namespace app\models;


use ishop\App;

class Category extends AppModel
{

    public $attributes = [
        'title' => '',
        'parent_id' => '',
        'keywords' => '',
        'description' => '',
        'alias' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ]
    ];
    public function getIds($id){
        $cats = App::$app->getProperty('cats');
        $ids = null;
        foreach ($cats as $k => $v){
            if($v['parent_id'] == $id){
                $ids .= $k . ',';
                $ids .= $this->getIds($k);
            }
        }
        return $ids;
    }
}