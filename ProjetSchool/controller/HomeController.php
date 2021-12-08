<?php

class HomeController extends MainController
{

    public function index()
    {
        $DBData = new DBData();
        $cursusList = $DBData->getCursus() ;

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
    
    public function enfant(){

        $DBData = new DBData();
        $etudiantList = $DBData->getEtudiant();
        $matiereList = $DBData->getMatiere();
      

        return $this->show('enfant', [
            'matiereList' => $matiereList,
            'etudiantList' => $etudiantList,
            ]);
        }


    public function parent()
    {
        $DBData = new DBData();
        $familleList = $DBData->getFamille();
        $noteList = $DBData->getNote();

        return $this->show('parents', [
            'noteList' => $noteList,
            'familleList' => $familleList   
        ]);
    }
    
    
    
    public function professeur(){

        $DBData = new DBData();
        $professeurList = $DBData->getProfesseur();
        // $noteList = $DBData->getNote();
        
        return $this->show('prof',[
            'professeurList' => $professeurList
            // 'noteList' => $noteList
        ]);
    }
   
}

//body = $ViewName
//[ le tableau ]= $ViewVars
