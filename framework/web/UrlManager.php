<?php

class UrlManager {

  function __construct() {
    if (isset($_Get['r'])) {
      $controller = ucfirst(explode('/', $_Get['r'])[1]);
      require_once 'controllers/' . $this->controller . 'Controller.php';
      $newController = '$this->controller'.'Controller';
    }
  }
}









/**
 * TODO: re-write this to work with the new 'current' framework
 *
 */

// class Route {

//   protected $query = NULL;
//   public $controller = 'Home'; # might put this val in config file
//   public object $application;
//   protected string $uri;
//   protected string $page;

//   public function __construct() {
//     $this->uri = $this->getUrl();
//     $this->controller = $this->get_controller();
//     $this->query =  $this->get_query();

//     require_once 'core/controllers/' . $this->controller . '.php';
//     $this->application = new $this->controller();
//   }

//   public function getUrl() {
//     return  $_SERVER['REDIRECT_URL'];
//   }

//   public function get_controller () {
//     $controller = ucfirst(explode('/', $this->uri)[1]);
//     if (file_exists('core/controllers/' . $controller . '.php' )) {
//       return $this->controller = $controller;
//     }
//     elseif ($controller === '' ) {
//       return $this->controller;
//     }

//     echo "$controller does not exist..<br>";
//     echo 'Current script: ' . __FILE__ .'<br>';
//     echo '404 not found'; exit(1);
//   }

//   public function get_query () {
//     return parse_url($this->getUrl(), PHP_URL_QUERY);
//   }
// }
