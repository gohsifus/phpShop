<?php


class Db
{

    public static function getConnection(){

        $paramsPath = ROOT.'/configs/connectionConfig.php';
        $params = include($paramsPath);

        try {
            $db = new mysqli($params['host'], $params['user'], $params['password'], $params['dbname']);
        } catch(Exception $e){
            echo $e->getMessage();
        }
        return $db;
    }

}