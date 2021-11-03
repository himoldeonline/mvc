<?php

require_once '../../framework/web/Controller.php';

class SiteController extends Controller {

  function index () {
    echo 'I am SiteController->index() in controllers/siteController.php<br>';
  }

  public function hello () {
    parent::hello();
    echo 'I am SiteController->hello()';
  }

}
