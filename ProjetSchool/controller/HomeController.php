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
        $noteList = $DBData->getNote();

        return $this->show('enfant', [
            'matiereList' => $matiereList,
            'etudiantList' => $etudiantList,
            'noteList' => $noteList
            ]);
        }


    public function parent()
    {
        $DBData = new DBData();
        $familleList = $DBData->getFamille();
        $noteList = $DBData->getNote();

        return $this->show('parents', [
            'familleList' => $familleList, 
            'noteList' => $noteList
        ]);
 
    }


    public function bulenfant()
    {
        $DBData = new DBData();
        $noteList = $DBData->getNote();
        // $note2List = $DBData->getNote2();

     return $this->show3('bulenfant', [
            'noteList' => $noteList
            // 'note2List' => $note2List
        ]);
    }


    
    public function professeur(){

        $DBData = new DBData();
        $professeurList = $DBData->getProfesseur();
        // $noteList = $DBData->getNote();
        
        return $this->show('prof',[
            'professeurList' => $professeurList
        ]);
    }
   
}

//body = $ViewName
//[ le tableau ]= $ViewVars

    


//CRUD

    // public function indexcrud(){
    //     return $this->show1('indexcrud');
    // }

    // public function userscrud(){
    //     return $this->show1('users');
    // }

    // public function insertcrud(){
    //     return $this->show1('insert');
    // }

    // public function editcursus(){
    //     return $this->show2('editcursus');
    // }

    // public function editetudiant(){
    //     return $this->show2('editetudiant');
    // }

    // public function editprofesseur(){
    //     return $this->show2('editprofesseur');
    // }

    // public function editnote(){
    //     return $this->show2('editnote');
    // }

    // public function editcurs_prof(){
    //     return $this->show2('editcurs_prof');
    // }
    // public function editutilisateur(){
    //     return $this->show2('editutilisateur');
    // }
    // public function editmatiere(){
    //     return $this->show2('editmatiere');
    // }
    // public function editfamille(){
    //     return $this->show2('editfamille');
    // }




