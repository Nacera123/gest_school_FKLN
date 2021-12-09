<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {
        // $viewVars est disponible dans chaque fichier de vue
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/' . $viewName . '.php';
        // include __DIR__ . '/../views/footer.php';
       
    }
}

//ViewVars est un tableau vide que l'on remplis 
// include est un require 