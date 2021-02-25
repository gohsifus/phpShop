<?php
include_once(ROOT.'/components/Db.php');

class Goods
{

    /**
     * Получить товар по id
     * @param $id идентификатор товара
     */
    public static function getGoodsById($id){
        $sql = "SELECT * FROM goods WHERE id = $id";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result->fetch_assoc();
    }

    /**
     * Получить несколько товаров
     */
    public static function getGoodsList(){
        $sql = "SELECT * FROM goods";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result;
    }

}