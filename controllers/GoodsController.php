<?php

include_once(ROOT.'/models/Goods.php');

class GoodsController
{

    /**
     * Список товаров
     * @return bool
     */
    public function actionIndex(){
        $goodsList = Goods::getGoodsList();
        require_once(ROOT . '/views/goods/goodsList.php');

        return true;
    }

    /**
     * Просмотр одного товара
     * @param $param Массив с параметрами из запроса ([0] - раздел,[1] - id)
     * @return bool
     */
    public function actionView($param){
        $goods = Goods::getGoodsById($param[1]);

        require_once(ROOT . '/views/goods/oneGoods.php');

        return true;
    }

}