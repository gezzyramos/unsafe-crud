<?php
include('../database.php');
include('../service.php');
include('../controller.php');

$service = new Service($db);
$controller = new Controller($service);

$controller->delete($_POST['id']);