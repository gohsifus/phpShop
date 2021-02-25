<?php


class AutoLoad
{

    /**
     * Эта функция вызывается если php не может найти подключаемый класс
     * @param $class_name
     */
    function __autoload($class_name){
        echo "qwwwwwwwwwwwww";
        $array_paths = array(
            '/models/',
            '/components/',
        );

        foreach($array_paths as $path){
            $file = ROOT.$path.$class_name.'.php';
            if(is_file($file)){
                include_once $file;
            }
        }
    }

}