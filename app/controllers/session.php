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
}
