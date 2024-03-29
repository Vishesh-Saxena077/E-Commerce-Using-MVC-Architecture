<?php
require_once 'config/database.php';
require_once 'app/controllers/HomeController.php';

$homeController = new HomeController();
$homeController->index();
?>