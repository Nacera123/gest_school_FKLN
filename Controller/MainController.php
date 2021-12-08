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

}