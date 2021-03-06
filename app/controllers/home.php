<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 26/03/2017
 * Time: 18:52
 */

class Home extends Controller
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
    $this->view('home/index', $dataArr);

    //include footer
    $this->view('_templates/footer');
  }
}
