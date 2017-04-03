<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 26/03/2017
 * Time: 18:52
 */

class Home extends Controller{
  public function index($name = ''){
    $model = $this->model('model');
    $model->name = $name;

    //include header
    $this->view('_templates/header');

    // model router
    $this->view('home/index', ['model' => $model->name]);

    //include footer
    $this->view('_templates/footer');
  }
}
