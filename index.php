<?php

session_start();

require __DIR__ . './class/cursus.php';
require __DIR__ . './class/professeur.php';
require __DIR__ . './class/etudiant.php';
require __DIR__ . './class/matiere.php';
require __DIR__ . './class/note.php';
require __DIR__ . './class/famille.php';
require __DIR__ . './class/utilisateur.php';







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
 
} elseif($url==='/validconnexion'){
    $controller->connect();
    
} elseif($url==='/connexion'){
    $controller->connexion();

}else if($url==='/index1'){
    $controller->index1();
    
}else if ($url==='/enfant'){
    $controller->enfant();
}else if ($url==='/enfantv'){
    $controller->enfantv();


}else if($url==='/prof'){
    $controller->prof();
}else if($url==='/profv'){
    $controller->profv();


}else if($url==='/parent'){
    $controller->parent();

}else if ($url==='/Parentsv'){
    $controller->Parentsv();

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
}else if($url==='/test'){
    $controller->test();

    
}else{
    http_response_code(404);
}


