<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 02/04/2017
 * Time: 21:42
 */

class Cart extends Controller {

  public function addToCart()
  {
    if(isset($_POST['productID'])){

      $action = $_POST['action'];
      $productID = $_POST['productID'];

      switch ($action)
      {
        case 'add':
          $this->session->add($productID);
          break;
        case 'remove':
          $this->session->remove($productID);
          break;
      }
    }
  }
}
