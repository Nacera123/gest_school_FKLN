
<?php

class HomeController extends MainController
{
    public function index()
    {
        $DBData = new DBData();
        $cursusList = $DBData->getformation() ;

        return $this->show('index1', [
            'cursusList' => $cursusList
        ]);
    }

    public function register(){
        return $this->show('register');
    }

    public function connect(){
        return $this->show('connect');
    }

    public function index1(){
        return $this->show('index1');
        
    }
}
