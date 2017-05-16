<?php

/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 13/05/2017
 * Time: 16:09
 */
class Pages extends Controller
{
  public function index($name = '', $method = '')
  {
    $this->session->start();

    $model = $this->model('model');
    $model->name = $name;

    $dataArr = [
      'model' => $model->name,
      'products' => $model->getProducts()
    ];

    //include header
    $this->view('_templates/header');

    // view router
    $this->view('pages/' . $method, $dataArr);

    //include footer
    $this->view('_templates/footer');
  }

  public function cart($name = '', $method = '')
  {
    $this->session->start();

    $cart_products = [0];

    $model = $this->model('model');
    $model->name = $name;

    $session = $this->session->get();

    if (isset($session['cart_products']) && !empty($session['cart_products']))
      $cart_products = $session['cart_products'];

    $dataArr = [
      'model' => $model->name,
      'products' => $model->getProductByID($cart_products)
    ];

    //include header
    $this->view('_templates/header');

    // view router
    $this->view('pages/' . $method, $dataArr);

    //include footer
    $this->view('_templates/footer');
  }
}
