
<?php

class HomeController extends MainController
{
    public function index()
    {
        $DBData = new DBData();
        $cursusList = $DBData->getformation() ;
        return $this->show('index1', [
            'cursusList' => $cursusList,

        ]);
    }

    public function register(){
        return $this->show('register');
    }

    public function connect(){

        
        return $this->show('connectvalid');
    }

    public function connexion(){
        return $this->show('connexion');
    }


    public function index1(){
        return $this->show('index1');
        
    }

    public function test(){
        return $this->show('test');
        
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


    public function enfantv(){

        $DBData = new DBData();
        $cursusList = $DBData->getformation() ;

        return $this->show('enfantv', [
            'cursusList' => $cursusList
        ]);

    }



    public function prof(){

        $DBData = new DBData();
        $professeurList = $DBData->getProfesseur();
        $cursusList = $DBData->getformation();
        $matiereList1 = $DBData-> getmatiere1();
        $etudiantprofList = $DBData-> getetudiantprof();


        return $this->show('prof',[
            'professeurList' => $professeurList,
            'cursusList' => $cursusList,
            'matiereList1' => $matiereList1,
            'etudiantprofList' => $etudiantprofList,

        ]);

    }

    public function profv(){

        $DBData = new DBData();
        $vu_matiereList = $DBData->getvu_matiere();

        return $this->show('profv', [
            'vu_matiereList' => $vu_matiereList,
        ]);


    }

    public function parent(){
        $DBData = new DBData();
        $parentList = $DBData->getParent();
        $matiereList1 = $DBData->getmatiereparent() ;
        $noteList1 = $DBData->getnoteparent();
        $utilisateurList1 = $DBData->getutilisateur1();

        return $this->show('parent', [

            'parentList' => $parentList,
            'matiereList1' => $matiereList1,
            'noteList1' => $noteList1,
            'utilisateurList1' => $utilisateurList1,


        ]);


    }

    public function Parentsv(){

        $DBData = new DBData();
        $cursusList = $DBData->getformation();
        $utilisateurList = $DBData->getutilisateur();
        $utilisateurList1 = $DBData->getutilisateur1();

        return $this->show('Parentsv', [
            'cursusList' => $cursusList,
            'utilisateurList' => $utilisateurList,
            'utilisateurList1' => $utilisateurList1,

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
