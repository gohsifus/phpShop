<?php
include_once(ROOT.'/components/Db.php');

class News{

    /**
     * Получить новость по id
     * @param $id идентификатор новости
     */
    public static function getNewsById($id){
        $sql = "SELECT * FROM news WHERE id = $id";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result->fetch_assoc();
    }

    /**
     * Получить несколько новостей
     */
    public static function getNewsList(){
        $sql = "SELECT * FROM news";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result;
    }




}
