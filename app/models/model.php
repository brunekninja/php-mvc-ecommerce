<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 02/04/2017
 * Time: 21:46
 */

class Model {
  function __construct($db)
  {
    try {
        $this->db = $db;
    } catch (PDOException $e) {
        exit('Database connection could not be established.');
    }
  }

  public function getProductsAmount()
  {
    $sql = "SELECT COUNT(id) AS products_amount FROM products";
    $query = $this->db->prepare($sql);
    $query->execute();

    return $query->fetch()->products_amount;
  }
}
