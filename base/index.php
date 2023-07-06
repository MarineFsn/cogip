<?php

// Please, use php -S localhost:8000 -t public in your terminal to start the project

// require_once __DIR__.'/../app/vendor/autoload.php';
// require_once __DIR__.'/../app/Core/Helper.php';
// require_once __DIR__.'/../app/Routes/routes.php';

define('APP', dirname(__FILE__)."/app/");
$route = $_GET['route'];
$routeParts = explode('/', $route);
$base = $routeParts[0];

if($base == ''){
    $base = 'views/welcome';
}

// var_dump($base);
$ctrl = APP.'controllers/'.$base.'.php';
var_dump($ctrl);
if(file_exists($ctrl)){
    require_once($ctrl);
}else{
    require_once(APP.'views/404.php');
}