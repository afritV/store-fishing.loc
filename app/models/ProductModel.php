<?php


namespace models;

use core\Route;

include_once 'config.php';

class ProductModel
{
    /**
     * @var mysql
     */
    public $db;
    /**
     * ProductModel constructor.
     */
    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    /**
     * inference all product
     * @return string
     */
    public function allProd()
    {
        $sql = 'select * from products order by id;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * inference all products where Id = 1
     * @return mixed
     */
    public function coilsProd()
    {
        $sql = 'select * from products where id_categories = 1 ;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * inference all products where Id = 2
     * @return mixed
     */
    public function rodProd()
    {
        $sql = 'select * from products where id_categories = 2 ;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * inference all products where Id = 3
     * @return mixed
     */
    public function boatsProd()
    {
        $sql = 'select * from products where id_categories = 3 ;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * get $id and select data in DataBase
     * @param $id
     * @return mixed
     */    public function getTaskById($id)
    {
        $sql = "select * from products where id = '$id' ;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    /**
     * @param $name
     * @param $partial_description
     * @param $price
     * @param $description
     * @param $categories
     * get data and save to DataBase
     */
    public function addProduct($name , $partial_description, $price, $description , $categories)
    {
        $sql = "INSERT INTO products ( name, partial_description, price, description , id_categories ) VALUES ( '$name' , '$partial_description', '$price', '$description', '$categories');";
        $this->db->query($sql);
    }
    /**
     * @param $id
     * delete product where id = $id
     */
    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `products`.`id` = '$id';";
        $this->db->query($sql);
    }
    /**
     * @param $name
     * @param $partial_description
     * @param $price
     * @param $description
     * @param $categories
     * @param $id
     * edit data and save to DataBase
     */
    public function editProduct($name , $partial_description, $price, $description , $categories, $id)
    {
        $sql = "UPDATE `products` SET `name` = '$name', `partial_description` = '$partial_description', `price` = '$price', `description` = '$description', `id_categories` = '$categories' WHERE `products`.`id` = '$id';";
        $this->db->query($sql);
    }
}