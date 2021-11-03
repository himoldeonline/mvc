<?php

/**
 * all URL`s go through this file
 * the 'resolved' URL is passed to the designated controller
 * that lives in the web-site created by the user
 * -> see the example_site
 *
 */


class Application {

  private $default_controller = 'siteController';
  private $default_action = 'index';

  function run() {
  /**
    * resolve URL and route to controller & -> action
    *
    * '/' = siteController->index()
    *
    * '/site' = siteControler->index()
    * '?r=site' siteControler->index()
    *
    * '/site/hello' = siteController->hello()
    * '?r=site/hello' = siteController->hello()
    *
    * '?r=about/person&id=1' = siteController->person(1);
    * '?r=about/person/1' = siteController->person(1); ved bruk av regex..
    */
    return;
  }

}
