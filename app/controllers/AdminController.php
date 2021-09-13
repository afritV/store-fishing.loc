<?php


namespace controllers;

use core\BaseController;
use core\Route;
use core\View;
use models\ProductModel;
use models\UserModel;

class AdminController extends BaseController

{

    /**
     * create view to show admin_view.php
     */
    public function index()
    {
        $view = new View();
        $view->renderAdmin('admin_view.php', 'admin_view.php');
    }
    /**
     * create view to show admin_product.php
     * create ProductModel and save new data to DataBase
     * displaying a list of products
     */
    public function product()
    {
        $view = new View();
        $product = new ProductModel(); // создаю модель
        $view->products = $product->allProd();
        $view->renderAdmin('admin_product.php', 'admin_view.php');
    }
    /**
     * create view to show admin_user.php
     * create ProductModel and save new data to DataBase
     * displaying a list of users
     */
    public function user()
    {
        $view = new View();
        $user = new UserModel(); // создаю модель
        $view->user = $user->all();
        $view->renderAdmin('admin_user.php', 'admin_view.php');
    }
    /**
     * Route to show admin_user.php
     * Delete an existing data from DataBase
     */
    public function delete()
    {
        $user = new UserModel();
        $userId = filter_input(INPUT_POST, 'id');
        $user->delete($userId);
        Route::redirect('admin', 'user');
    }
    /**
     * create view to show admin_create.php
     */
    public function create()
    {
        $view = new View();
        $view->renderAdmin('admin_create.php', 'admin_view.php');
    }
    /**
     * create view to show admin_create_product.php
     */
    public function create_product()
    {
        $view = new View();
        $view->renderAdmin('admin_create_product.php', 'admin_view.php');
    }
    /**
     * create new user and route admin_create.php
     * create UserModel and save new data to DataBase
     */
    public function store()
    {
        $userDB = new UserModel();
        $userName = filter_input_array(INPUT_POST);
        $userDB->addUser($userName['login'], $userName['password'], $userName['email']);

        Route::redirect('admin', 'user');
    }
    /**
     * create new product and route admin_product.php
     * create ProductModel and save new data to DataBase
     */

    public function storeProduct()
    {
        $productDB = new ProductModel();
        $productData = filter_input_array(INPUT_POST);
        $productDB->addProduct($productData['name'], $productData['partial_description'], $productData['price'], $productData['description'],$productData['categories']);

        Route::redirect('admin', 'product');
    }

    /**
     * delete product and route admin_product.php
     */

    public function deleteProduct()
    {
        $productDB = new ProductModel();
        $productId = filter_input(INPUT_POST, 'id');
        $productDB->delete($productId);
        Route::redirect('admin', 'product');
    }

    /**
     * create new page  product admin_edit_product.php
     * get id product ant view product to page     *
     */

    public function showEditProduct(){
        $productDB = new ProductModel();
        $productId = filter_input(INPUT_POST, 'id');
        $view = new View();
        $view->products = $productDB->getTaskById($productId);
        $view->renderAdmin('admin_edit_product.php', 'admin_view.php');
    }

    /**
     * Route to new page  product admin_edit_product.php
     * update data product and save to DataBase
     */

    public function updateProduct(){
        $productDB = new ProductModel();
        $productData = filter_input_array(INPUT_POST);
        $productDB->editProduct($productData['name'], $productData['partial_description'], $productData['price'], $productData['description'], $productData['categories'],$productData['id']);
        Route::redirect('admin', 'product');
    }
}