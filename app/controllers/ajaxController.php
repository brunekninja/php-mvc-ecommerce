<?php

/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 07/05/2017
 * Time: 18:38
 */
class ajaxController extends Controller
{
  public function addToCart()
  {

    if(isset($_POST['productID'])){

      $action = $_POST['action'];

      switch ($action)
      {
        case 'add':
          echo $_POST['productID'];
          break;
        case 'remove':
          echo $_POST['productID'];
          break;
      }
    }
  }
}
