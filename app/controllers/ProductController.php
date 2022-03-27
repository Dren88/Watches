<?php

namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController
{
    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product){
            throw new \Exception('Страница не найдена', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if($r_viewed){
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
        }


        $related = \R::getAll("SELECT * FROM related_product JOIN product ON (related_product.related_id = product.id) WHERE related_product.product_id = ?", [$product->id]);

        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);

        $mods = \R::findAll('modification', 'product_id = ?', [$product->id]);
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed', 'breadcrumbs', 'mods'));
    }

    public static function getBrowserAgentName($userAgent)
    {
        $result = 'Other';
        if(!$userAgent) {
            return $result;
        }

        $userAgent = \mb_strtolower($userAgent);
        switch ($userAgent) {
            case \strpos($userAgent, 'opera')!==false || \strpos($userAgent, 'opr/')!==false:
                $result = 'opera';
                break;
            case \strpos($userAgent, 'edge')!==false:
                $result = 'edge';
                break;
            case (\strpos($userAgent, 'chrome')!==false && \strpos($userAgent, 'android')!==false):
                $result = 'chrome';
                break;
            case \strpos($userAgent, 'safari')!==false && \strpos($userAgent, 'iphone')!==false:
                $result = 'safari';
                break;
            case \strpos($userAgent, 'firefox')!==false:
                $result = 'firefox';
                break;
            case \strpos($userAgent, 'msie')!==false || \strpos($userAgent, 'trident/7')!==false:
                $result = 'msie';
                break;
        }

        return $result;
    }
}