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

  public function clean()
  {
    $_SESSION = array();
  }

  public function destroy()
  {
    session_destroy();
  }

  public function add($prodID)
  {
    $this->start();
    $_SESSION['cart_products'] = 443;
  }

  public function remove($prodID)
  {
    $this->start();
    $_SESSION['cart_products'] = 3;
  }
}
