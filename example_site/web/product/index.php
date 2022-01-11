<?php

require_once  '../../controllers/siteController.php';

$app = new SiteController;
$app->index();
$app->hello();
