<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 02/04/2017
 * Time: 21:42
 */

class CartCtrl extends Controller {

  public function addToCart()
  {
    if(isset($_POST['action'])){

      $action = $_POST['action'];
      $productID = null;

      if (isset($_POST['productID']))
        $productID = $_POST['productID'];

      switch ($action)
      {
        case 'add':
          $this->session->add($productID);
          break;
        case 'remove':
          $this->session->remove($productID);
          break;
        case 'clean':
          $this->session->clean();
          break;
      }
    }
  }
}
