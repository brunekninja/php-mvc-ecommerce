<?php

class Controller
{
  protected $cart;
  protected $home;
  protected $session;

  /**
   * @var null Database Connection
   */
  public $db = null;

  /**
   * @var null Model
   */
  public $model = null;

  function __construct()
  {
    $this->session = new Session();
    $this->openDBConnection();
    $this->model('model');
  }

  private function openDBConnection()
  {
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
    $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model($this->db);
  }

  public function view($view, $data = [])
  {
    extract($data, EXTR_PREFIX_SAME, 'dd');
    require_once '../app/views/' . $view . '.php';
  }
}
