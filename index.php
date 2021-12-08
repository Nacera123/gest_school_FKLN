<?php


require __DIR__ . './class/cursus.php';

require __DIR__ ."./database/db_data.php";

require __DIR__ . './controller/MainController.php';
require __DIR__ . '/controller/HomeController.php';

$controller = new HomeController();

if (isset($_GET['_url'])) {
    $url = $_GET['_url'];
} else {
    $url = '/';
}

if ($url === '/' || $url==='/acceuil') { // Accueil
    $controller->index();
} else if($url==='/inscription'){
    $controller->register();
 
} elseif($url==='/connexion'){
    $controller->connect();
}else if($url==='/index1'){
    $controller->index1();

}else if($url==='/enfant'){
    $controller->enfant();

// }else if($url==='/crud'){
//     $controller->crud();    

}else if($url==='/indexcrud'){
    $controller->indexcrud();    

}else if($url==='/users'){
    $controller->userscrud();    

}else {
    http_response_code(404);
}


