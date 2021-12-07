<?php

// require __DIR__ . './class/cursus.php';

require __DIR__ . './views/index1.php';
require __DIR__ . './views/register.php';
require __DIR__ . './views/connect.php';

require __DIR__ ."./database/db_data.php";

require __DIR__ . './controller/MainController.php';
require __DIR__ . '/controller/HomeController.php';

$controller = new HomeController();

if (isset($_GET['_url'])) {
    $url = $_GET['_url'];
} else {
    $url = '/';
}

if ($url === '/') { // Accueil
    $controller->index();
} else {
    http_response_code(404);
}


