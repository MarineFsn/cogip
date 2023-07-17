<?php
session_start();
// Please, use php -S localhost:8000 -t public in your terminal to start the project

// require_once __DIR__.'/../app/vendor/autoload.php';
// require_once __DIR__.'/../app/Core/Helper.php';
// require_once __DIR__.'/../app/Routes/routes.php';

// var_dump($_SESSION);
// var_dump($_SESSION['isConnected']);
// session_unset();

define('APP', dirname(__FILE__) . "/app/");
$route = $_GET['route'];
$routeParts = explode('/', $route);
$base = $routeParts[0];
// var_dump($base);
if (!isset($_SESSION["isConnected"]) || $_SESSION["isConnected"] != 1) {
    if ($base != 'user') {
        if ($base == 'signup') {
            require_once APP . 'Controllers/signupController.php';
        } else {
            require_once APP . 'Controllers/loginController.php';
        }
    } else {
        $ctrl = APP . 'Controllers/' . $base . 'Controller.php';
        if (file_exists($ctrl)) {
            require_once($ctrl);
        } else {
            require_once(APP . 'Views/404.php');
        }
    }
} else {
    if ($base == '') {
        $base = 'Home';
    }
    // var_dump($base);
    $ctrl = APP . 'Controllers/' . $base . 'Controller.php';
    // var_dump($ctrl);
    if (file_exists($ctrl)) {
        require_once($ctrl);
    } else {
        require_once(APP . 'Views/404.php');
    }
}

?>