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

    $model = $this->model('cart');
    $model->name = $name;

    var_dump($model);

    $dataArr = [
      'model' => $model->name,
      'products' => $model->getProductByID(2)
    ];

    //include header
    $this->view('_templates/header');

    // view router
    $this->view('pages/' . $method, $dataArr);

    //include footer
    $this->view('_templates/footer');
  }
}
