<?php


namespace controllers;

use models\UserModel;
use core\Route;
use core\View;

class UserController{
    /**
     * Login method
     */
    static public function main()
    {
        if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['password'])) {
            $userDB = new UserModel();
            $userData = filter_input_array(INPUT_POST);
            $result = $userDB->checkUser($userData['login'], $userData['password']);
            if ($result) {
                $_SESSION['username'] = $userData['login'];
            }

        }
        self::session_check();


    }
    /**
     * Check session on successfully logged in
     */
    static public function session_check()
    {
        if (isset($_SESSION['username'])) {
            $view = new View();
            $userDB = new UserModel();
            $result = $userDB->getUserByLogin($_SESSION['username']);
            if ($result) {

                Route::redirect('admin', 'index');
            } else {
                Route::redirect('index', 'login');
                session_destroy();

            }
        }
    }

    function logout(){
        session_destroy();

        Route::redirect('index');
    }





}