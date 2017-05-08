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
      $model = new Model('model');

      switch ($action)
      {
        case 'add':
          $model->sessionCtrl();
          break;
        case 'remove':
          echo $_POST['productID'];
          break;
      }
    }
  }
}
