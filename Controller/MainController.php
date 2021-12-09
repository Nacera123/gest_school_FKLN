<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {

        include __DIR__. '/../views/header.php';
        include __DIR__. '/../views/'.$viewName.'.php';
        



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



}