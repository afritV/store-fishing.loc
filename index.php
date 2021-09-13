<?php
session_start(); //session cart
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

require_once 'app/bootstrap.php';