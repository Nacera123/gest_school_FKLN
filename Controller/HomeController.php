
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

    public function enfant(){

        $DBData = new DBData();
        $etudiantList = $DBData->getEtudiant();
        $matiereList = $DBData->getmatiere();
        $noteList = $DBData->getnote();
        
        return $this->show('enfant', [

            'etudiantList' => $etudiantList,
            'matiereList' => $matiereList,
            'noteList' => $noteList
        ]);
    }

    public function prof(){

        $DBData = new DBData();
        $professeurList = $DBData->getProfesseur();
        $cursusList = $DBData->getformation();

        
        return $this->show('prof',[
            'professeurList' => $professeurList,
            'cursusList' => $cursusList



        ]);

    }



    //CRUD

    public function indexcrud(){
        return $this->show1('indexcrud');
    }

    public function userscrud(){
        return $this->show1('users');
    }

    public function insertcrud(){
        return $this->show1('insert');
    }

    public function editcursus(){
        return $this->show2('editcursus');
    }

    public function editetudiant(){
        return $this->show2('editetudiant');
    }

    public function editprofesseur(){
        return $this->show2('editprofesseur');
    }

    public function editnote(){
        return $this->show2('editnote');
    }

    public function editcurs_prof(){
        return $this->show2('editcurs_prof');
    }
    public function editutilisateur(){
        return $this->show2('editutilisateur');
    }
    public function editmatiere(){
        return $this->show2('editmatiere');
    }
    public function editfamille(){
        return $this->show2('editfamille');
    }






}
