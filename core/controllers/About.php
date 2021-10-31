<?php

require_once 'core/apps/About/Application.php';

class About {

  protected object $app;

  function __construct () {
    $this->app = new Application;
    $this->app->run();
  }
  
}
