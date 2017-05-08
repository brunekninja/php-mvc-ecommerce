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

  public function getProducts()
  {
    $sql = "SELECT 
              products.id AS id,
              productName AS name, 
              productPrice AS price, 
              productDescription AS description,
              imageRef AS image,
              catName AS category
            FROM products
            INNER JOIN categories ON products.categoryID = categories.id";

    $query = $this->db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  public function getProductByID($prodID)
  {
    $sql = "SELECT 
              products.id AS id,
              productName AS name, 
              productPrice AS price, 
              productDescription AS description,
              imageRef AS image
            FROM products
            WHERE id = $prodID";

    $query = $this->db->prepare($sql);
    $query->execute();

    return $query->fetchAll();
  }

  public function sessionCtrl()
  {
    $_SESSION['cart_products'] = 33;
  }

}
