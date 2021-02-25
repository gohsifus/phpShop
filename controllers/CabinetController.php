<?php
require_once(ROOT.'/models/User.php');

class CabinetController
{

    public function actionIndex(){

        $user_id = User::checkLogged();

        require_once(ROOT.'/views/cabinet/cabinet.php');
        return true;
    }

}