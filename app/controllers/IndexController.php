<?php


namespace controllers;

use core\BaseController;
use core\Route;
use core\View;
use models\ProductModel;
use controllers\UserController;

class IndexController extends BaseController
{
    public $countCart = 0;

    /**
     * create a new page index_view.php
     * displaying a list of products
     * displaying a list count product
     */
    public function index()
    {

        $view = new View();
        $product = new ProductModel();
        $view -> countCart = $countCart = count($_SESSION['cart']);
        $view->products = $product->allProd();
        $view->render('index_index_view.php', 'default_view.php');
    }
    /**
     * create a new page product_view.php
     */
    public function open()
    {
        $view = new View();
        $view->render('product_view.php', 'default_view.php');
    }
    /**
     * create a new page index_contacts.php
     */
    public function contacts()
    {
        $view = new View();
        $view->render('index_index_contacts.php', 'default_view.php');
    }
    /**
     * create a new page index_login.php
     */
    public function login()
    {
        $view = new View();
        UserController::main();
        $view->render('index_index_login.php', 'default_view.php');
    }
}