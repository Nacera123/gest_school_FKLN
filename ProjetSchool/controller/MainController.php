<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {
        // $viewVars est disponible dans chaque fichier de vue
        include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/' . $viewName . '.php';
        include __DIR__ . '/../views/footer.php'; 
    }

    public function show1($viewName, $viewVars = []){
        include __DIR__. '/../views/crud/header.php';
        include __DIR__. '/../views/crud/'.$viewName.'.php';
        include __DIR__. '/../views/crud/footer.php';
    }

    public function show2($viewName, $viewVars = []){
        include __DIR__. '/../views/crud/header.php';
        include __DIR__. '/../views/crud/conn.php';
        include __DIR__. '/../views/crud/edit/'.$viewName.'.php';
        include __DIR__. '/../views/crud/footer.php';
    }

    public function show3($viewName, $viewVars = [])
    {
        // $viewVars est disponible dans chaque fichier de vue
        // include __DIR__ . '/../views/header.php';
        include __DIR__ . '/../views/' . $viewName . '.php';
        // include __DIR__ . '/../views/footer.php';
       
    }


}

//ViewVars est un tableau vide que l'on remplis 
// include est un require 