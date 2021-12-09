<?php
 session_start();
/*
Le fichier .htaccess permet de rediriger toutes les requêtes HTTP vers le fichier index.php ce qui nous de permet de n'avoir qu'un seul point d'entrée
index.php est le FrontController
*/

// 1- Chargement des fichiers définissants les classes
require __DIR__ . './model/cursus.php';
require __DIR__ . './model/etudiant.php';
require __DIR__ . '/model/matiere.php';
require __DIR__ . '/model/note.php';
require __DIR__ . '/model/professeur.php';
require __DIR__ . '/model/famille.php';


// 2- Chargement des données
require __DIR__ . './inc/DBData.php';


require __DIR__ . './controller/MainController.php';
require __DIR__ . './controller/HomeController.php';

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

}else if($url==='/parents'){
    $controller->parent();

}else if($url==='/prof'){
    $controller->professeur();



// CRUD
}else if($url==='/crud'){
    $controller->crud();    

}else if($url==='/indexcrud'){
    $controller->indexcrud();    

}else if($url==='/users'){
    $controller->userscrud();    

}else if($url==='/insert'){
    $controller->insertcrud();    

}else if($url==='/editcursus'){
    $controller->editcursus();    
}else if($url=== '/editetudiant'){
    $controller->editetudiant();    

}elseif($url==='/editprofesseur'){
    $controller->editprofesseur();
}else if($url==='/editnote'){
    $controller->editnote();
}else if ($url==='/editcurs_prof'){
    $controller->editcurs_prof();
}else if($url==='/editutilisateur'){
    $controller->editutilisateur();
}else if($url==='/editmatiere'){
    $controller->editmatiere();
}else if($url==='/editfamille'){
    $controller->editfamille();
    
    

}else  {
    http_response_code(404);
}