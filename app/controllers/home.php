<?php
/**
 * Created by PhpStorm.
 * User: brunekninja
 * Date: 26/03/2017
 * Time: 18:52
 */

class Home extends Controller{
  public function index($name = ''){
    $user = $this->model('model');
    $user->name = $name;

    $this->view('home/index', ['model' => $user->name]);
  }
}
