<?php

class Router {

    private $routes; //Массив в котором хранятся маршруты

    public function __construct(){

        $routesPath = ROOT.'/configs/routes.php';
        $this->routes = include($routesPath);
    }


    /**
     * Анализирует строку зпроса и вызывает контроллер для нее(Front controller)
     */
    public function run(){

        $uri = $this->getUri();

        foreach($this->routes as $uriPattern => $path){

            if(preg_match("~$uriPattern~", $uri)){

                $innerRoute = preg_replace("~/$uriPattern~", $path, $uri); //Находим внутренний маршрут из url

                $split = explode('/', $innerRoute); //Делим на '/'

                $controllerName = ucfirst(array_shift($split).'Controller');
                $actionName = 'action'.ucfirst(array_shift($split));

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                $parameters = $split; //Оставшиеся параметры из url

                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName($parameters);
                if($result != null){
                    break;
                }
            }
        }
    }


    /**
     * Получить текущий url из адресной строки
     */
    private function getUri(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return $_SERVER['REQUEST_URI'];
        }
        return '';
    }
}