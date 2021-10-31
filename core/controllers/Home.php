<?php

require_once 'core/apps/Home/Application.php';

class Home {

  protected object $app;

  function __construct () {
    $this->app = new Application;
    $this->app->run();
  }

}
