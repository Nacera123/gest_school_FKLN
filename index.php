<?php

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
} else if($url==='/inscription'){
    $controller->register();
 
} elseif($url==='/connexion'){
    $controller->connect();
}else if($url==='/index1'){
    $controller->index1();

}else  {
    http_response_code(404);
}


