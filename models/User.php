<?php
include_once(ROOT.'/components/Db.php');

class User
{

    /**
     * Получить пользователя по id
     * @param $id идентификатор пользователя
     */
    public static function getUserById($id){
        $sql = "SELECT * FROM users WHERE id = $id";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result->fetch_assoc();
    }

    /**
     * Получить несколько пользователей
     */
    public static function getNewsList(){
        $sql = "SELECT * FROM users";

        $db = Db::getConnection();
        $result = $db->query($sql);

        return $result;
    }

    /**
     * Проверяет может ли пользователь авторизироваться
     * @param $username Логин
     * @param $password Пароль
     * @return false|mixed false|user_id
     */
    public static function checkUserByUsername($username, $password){
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $db = Db::getConnection();
        $result = $db->query($sql);

        if(!empty($user = $result->fetch_assoc())){
            if($user['password'] == $password){
                return $user['id'];
            }
        }
        return false;
    }

    /**
     * Авторизация
     * @param $id идентификатор пользователя
     */
    public static function auth($id){

        $_SESSION['user'] = $id;
    }


    /**
     * Проверка авторизации
     * @return mixed
     */
    public static function checkLogged(){

        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }

        header('Location: /authorization');
    }

    /**
     * Добавить новго пользователя в базу
     * @param $username имя пользователя
     * @param $email почта
     * @param $password пароль
     */
    public static function registrate($username, $email, $password){

        //TODO добавить проверку на уникальность имени

        $db = Db::getConnection();
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

        $result = $db->query($sql);
    }

    /**
     * Валидация при регистрации
     * @param $username
     * @return string
     */
    public static function checkUsername($username){
        if(strlen($username) > 2){
            return 'Ok';
        }
        return 'Имя пользователя должно быть длиннее 2 символов';
    }

    /**
     * Валидация при регистрации
     * @param $email
     * @return string
     */
    public static function checkEmail($email){
        return 'Ok';
    }

    /**
     * Валидация при регистрации
     * @param $password
     * @return string
     */
    public static function checkPassword($password){
        if(strlen($password) > 2){
            return 'Ok';
        }
        return 'Пароль должно быть длиннее 2 символов';
    }

}