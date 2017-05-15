<?php

/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 09/05/2017
 * Time: 01:14
 */
class Session
{
  public function start()
  {
    session_start();
  }

  public function destroy()
  {
    session_destroy();
  }

  public function clean()
  {
    $this->start();
    $_SESSION = [];
  }

  public function add($prodID)
  {
    $this->start();

    if (!isset($_SESSION['cart_products']))
      $_SESSION['cart_products'] = array();

    if((in_array($prodID, $_SESSION['cart_products'])) === false )
      array_push($_SESSION['cart_products'], $prodID);

    echo sizeof($_SESSION['cart_products']);
  }

  public function remove($prodID)
  {
    $this->start();

    if(isset($_SESSION['cart_products']) && ($key = array_search($prodID, $_SESSION['cart_products'])) !== false ) {
      unset($_SESSION['cart_products'][$key]);
      echo sizeof($_SESSION['cart_products']);
    } else {
      echo '0';
    }


  }
}
