<?php


namespace controllers;

use core\BaseController;
use core\Route;
use core\View;
use models\ProductModel;

class ProductController extends BaseController

{
    /**
     * create a new page product_view.php
     * displaying of products
     */
    public function index()
    {
        $view = new View();
        $product = new ProductModel(); // создаю модель
        $id = filter_input(INPUT_POST, 'id');
        $view->product = $product->getTaskById($id);
        $view->render('product_view.php', 'default_view.php');
    }
    /**
     * create a new page product_coils.php
     * displaying a list of products in product_coils.php
     */
    public function coils()
    {
        $view = new View();
        $product = new ProductModel(); // создаю модель
        $view->products = $product->coilsProd();
        $view->render('product_coils.php', 'default_view.php');
    }
    /**
     * create a new page 'product_rod.php'
     * displaying a list of products in product_rod.php'
     */
    public function rod()
    {
        $view = new View();
        $product = new ProductModel(); // создаю модель
        $view->products = $product->rodProd();
        $view->render('product_rod.php', 'default_view.php');
    }
    /**
     * create a new page product_coils.php
     * displaying a list of products in product_coils.php
     */
    public function boats()
    {
        $view = new View();
        $product = new ProductModel(); // создаю модель
        $view->products = $product->boatsProd();
        $view->render('product_coils.php', 'default_view.php');
    }
}