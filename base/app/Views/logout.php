<?php
session_unset();
$_SESSION['isConnected'] = 0;
require_once APP . "Controllers/HomeController.php";
?>