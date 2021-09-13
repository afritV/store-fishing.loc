<?php


namespace models;
use core\Route;

include_once 'config.php';


class UserModel
{
    /**
     * @var \mysqli
     */
    public $db;
    /**
     * UserModel constructor.
     */
    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    /**
     * @param $id
     * delete data in DataBase
     */
    public function delete($id)
    {
        $sql = "DELETE FROM `users` WHERE `users`.`id` = '$id';";
        $this->db->query($sql);
    }
    /**
     * @param $login
     * @param $password
     * @param $email
     * get user param and add user data to DataBase
     */
    public function addUser( $login, $password,  $email)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (login, password, email) VALUES ('$login','$password', '$email')";
        $this->db->query($sql);
    }
    /**
     * @return mixed
     * select all users in DataBase
     */
    public function all()
    {
        $sql = 'select * from users order by id;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * @param $login
     * @return array|null
     * get input param and check to DataBase
     */
    public function getUserByLogin( $login)
    {
        $sql = "SELECT * FROM users where login like '$login';";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->fetch_assoc();
        }
        return null;
    }
    /**
     * @param $login
     * @param $password
     * @return bool|null
     * get input param and validate to bool
     */
    public function checkUser( $login,  $password)
    {
        $userData = $this->getUserByLogin($login);
        if ($userData) {
            if ($password === $userData['password']) {
                return true;
            } else {
                var_dump('Не правильные данные');
                $_SESSION['error'] = 'password is invalid';
                return null;
            }
        } else {
            $_SESSION['error'] = 'no such user';
            var_dump('Юзер не найден');
            return null;
        }
    }
}