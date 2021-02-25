<?php

require_once(ROOT.'/models/User.php');

class UserController
{

    /**
     * Страница регистрации
     */
    public function actionRegistration(){

        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $message = '';
            $flagRegistrate = false;

            if(($res = User::checkUsername($username)) != 'Ok'){
                $message = $res;
            }

            if(($res =  User::checkEmail($email)) != 'Ok'){
                $message = $res;
            }

            if(($res = User::checkPassword($password)) != 'Ok'){
                $message = $res;
            }

            if(empty($message)){
                User::registrate($username, $email, $password);
                //TODO сделать отправку письма пользователю
                $message = "<h2>Поздравляем $username, вы успешно зарегистрировались.</h2>
                            Мы отправили письмо с подтверждением на $email.";
                $flagRegistrate = true;
            }
        }

        require_once(ROOT.'/views/users/registrate.php');

        return true;
    }

    /**
     * Страница авторизации
     */
    public function actionAuthorize(){

        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];


            $user_id = User::checkUserByUsername($username, $password);

            if($user_id != false){
                User::auth($user_id);
                $message = 'OK';
            } else {
                $message = 'BAD';
            }
        }

        require_once(ROOT.'/views/users/login.php');

        return true;
    }

    public function actionLogout(){

        unset($_SESSION['user']);
        header('Location: /');
    }

}