<?php
define('APP_PATH', __DIR__ . '../');

require_once APP_PATH.'core/model.php';
require_once APP_PATH.'core/view.php';
require_once APP_PATH.'core/controller.php';
require_once APP_PATH.'core/route.php';

\app\core\Route::start();
