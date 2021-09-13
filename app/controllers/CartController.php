<?php


namespace controllers;

use core\BaseController;
use core\Route;
use core\View;


class CartController
{
    /**
     * create new page cart.php
     */
    public function show()
    {
        $view = new View();
        $view->render('cart.php', 'default_view.php');
    }

    /**
     * @param int and add to &_SSESION
     * @return json format
     */
    public function addToCartAction()
    {
        $productId = filter_input(INPUT_POST, 'id');
        $resData = array();
        if (isset($_SESSION['cart']) && array_search($productId, $_SESSION['cart']) === false) {
            $_SESSION['cart'] [] = $productId;
            $resData['cntItems'] = count($_SESSION['cart']);
            $resData['success'] = 1;
            Route::redirect('index');
        } else {
            $resData['success'] = 0;
            Route::redirect('index');
        }
        echo json_encode($resData);
    }
}