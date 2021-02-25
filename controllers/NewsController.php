<?php

include_once(ROOT.'/models/News.php');

class NewsController
{

    /**
     * Список новостей
     * @return bool
     */
    public function actionIndex(){
        $newsList = News::getNewsList();
        require_once(ROOT . '/views/news/newsList.php');

        return true;
    }

    /**
     * Просмотр одной новости
     * @param $param Массив с параметрами из запроса ([0] - раздел,[1] - id)
     * @return bool
     */
    public function actionView($param){
        $news = News::getNewsById($param[1]);

        require_once(ROOT . '/views/news/oneNews.php');

        return true;
    }

}