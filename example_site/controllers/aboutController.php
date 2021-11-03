<?php

require_once '../../framework/web/Controller.php';

class SiteController extends Controller {

  function index () {
    echo 'I am SiteController->index() in controllers/aboutController.php<br>';
  }

  function person (int $id) {
    if ($id === 1) {
      echo 'bob';
    }
  }

}
