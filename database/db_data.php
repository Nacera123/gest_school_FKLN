<?php

class DBData {
	/** @var PDO */
	private $dbh;

    public function __construct() {
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    
    // FONCTION POUR L'INSCRIPTION 
    public function insert_user($data=[], $data1 =[]){

    $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal,fonction) VALUES
        (:nom, :prenom, :email, :mot_de_passe, :mobile, :adresse, :code_postal, :fonction) ";

    $res= $this->dbh->prepare($sql)->execute($data);

    return $res;
    }



    // FONCTION POUR LA CONNEXION 
    public function login() {
    $query = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe";
    $reslt = $this->dbh ->prepare($query);  
    $reslt->execute(  
            array(  
                'email'     =>     $_POST["email"],  
                'mot_de_passe'     =>     $_POST["mot_de_passe"]  
            )  
    );  

    $user = $reslt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["email"] = $user["email"]; 
    $_SESSION['id_utilisateur'] = $user["id_utilisateur"];


        
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['fonction'] == 'admin') {
        header('location:indexcrud');		  
    }elseif($user['fonction'] == 'parent') {
        header('location:Parentsv');    
    }elseif($user['fonction'] == 'professeur') {
        header('location:profv'); 
    }elseif($user['fonction'] == 'etudiant') {
        header('location:enfantv'); 
    }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }

    }


    // FONCTION POUR LA CONNEXION 2
    public function login2() {
        $query = "SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe";
        $reslt = $this->dbh ->prepare($query);  
        $reslt->execute(  
                array(  
                    'email'     =>     $_POST["email"],  
                    'mot_de_passe'     =>     $_POST["mot_de_passe"]  
                )  
        );  

        $user = $reslt->fetch(PDO::FETCH_ASSOC);
        $_SESSION["email"] = $user["email"]; 
        $_SESSION['id_utilisateur'] = $user["id_utilisateur"];


        
        // vérifier si l'utilisateur est un administrateur ou un utilisateur
        if ($user['fonction'] == 'admin') {
            header('location:indexcrud');		  
        }elseif($user['fonction'] == 'parent') {
            header('location:parent');    
        }elseif($user['fonction'] == 'professeur') {
            header('location:prof'); 
        }elseif($user['fonction'] == 'etudiant') {
            header('location:enfant'); 
        }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }

    }


    //fonction validation compte professeur

    public function validation($data1=[]){


        $sql = "INSERT INTO professeur (nom, prenom, matiere, id_utilisateur) VALUES (:nom, :prenom, :matiere, :id_utilisateur)"; 

            
        $res= $this->dbh->prepare($sql)->execute($data1);


        return $res;

    }


    //fonction validation compte etudiant

    public function validationenfant($data=[]){

        
        $sql = "INSERT INTO etudiant (nom, prenom, date_naissance, cursus, id_cursus, id_utilisateur) 
        VALUES (:nom, :prenom, :date_naissance, :cursus, :id_cursus, :id_utilisateur)" ;

        $res= $this->dbh->prepare($sql)->execute($data);
        

        return $res;


    }





    //fonction validation compte famille

    public function validationfamille($data=[]){

        $sql = "INSERT INTO famille (nom_parent, prenom_parent, mobile, adresse, code_postal, nom_enfant, prenom_enfant, dn_enfant, id_cursus, id_etudiant, id_utilisateur) 
        VALUES (:nom_parent, :prenom_parent, :mobile, :adresse, :code_postal, :nom_enfant, :prenom_enfant, :dn_enfant, :id_cursus, :id_etudiant, :id_utilisateur)" ;

        $res= $this->dbh->prepare($sql)->execute($data);
        

        return $res;

    }


    // Insertion de note par le prof

    public function insert_note($data =[]){

        $sql= "INSERT INTO note  (id_matiere, note, appreciation, id_etudiant, id_professeur, id_cursus)
        VALUES (:id_matiere, :note, :appreciation, :id_etudiant, :id_professeur, :id_cursus)";


        $res= $this->dbh->prepare($sql)->execute($data);

        return $res;






    }

    //----------------------------------------------- FONCTION POUR LES CLASS-------------------------------------------------------------





    //CLASSE utilisateur
    public function getid_utilisateur($id_utilisateur) {
    }

    public function getutilisateur() {
        // $cursusList est initialisé avec un tableau vide
        $utilisateurList = [];

        // $sql contient la requête SQL pour récupérer tous les cursus
        $sql =  "SELECT * from utilisateur 
        where   id_utilisateur =" . $_SESSION['id_utilisateur'] ;


        $utilisateurArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($utilisateurArray as $utilisateur) {
            $utilisateurList[] = new utilisateur($utilisateur['id_utilisateur'], $utilisateur['nom'], $utilisateur['prenom'], $utilisateur['email'], 
            $utilisateur['mot_de_passe'], $utilisateur['mobile'], $utilisateur['adresse'], $utilisateur['code_postal'], $utilisateur['fonction']);
        }

        return $utilisateurList;


    }




    // CLASS Etudiant
    public function getutilisateur1() {


        $utilisateurList1 = [];

        $sql2= "SELECT * FROM etudiant a WHERE a.nom=(SELECT b.nom from utilisateur b WHERE b.id_utilisateur=". $_SESSION['id_utilisateur'].")";
        $utilisateurArray1=$this->dbh->query($sql2)->fetchAll(PDO::FETCH_ASSOC);

        foreach($utilisateurArray1 as $etudiant) {
            $utilisateurList1[] = new Etudiant($etudiant['id_etudiant'],$etudiant['nom'], $etudiant['prenom'],
            $etudiant['date_naissance'],  $etudiant['cursus'],  $etudiant['id_utilisateur'],$etudiant['id_cursus']);
            
        }

        return $utilisateurList1;

    }

    //CLASSE CURSUS
    public function getid_cursusC($id_cursus) {
    }

    public function getformation() {
        // $cursusList est initialisé avec un tableau vide
        $cursusList = [];

        // $sql contient la requête SQL pour récupérer tous les cursus
        $sql = '
            SELECT *
            FROM cursus
        ';

    $cursusArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach($cursusArray as $cursus) {
        $cursusList[] = new cursus($cursus['id_cursus'], $cursus['nom_cursus'], $cursus['frais_cursus']);
    }

    return $cursusList;
    }



    //CLASSE MATIERE
    public function getid_matiereM($id_matiere) {
    }

    public function getvu_matiere() {
        // $cursusList est initialisé avec un tableau vide
        $vu_matiereList = [];

        // $sql contient la requête SQL pour récupérer tous les cursus
        $sql = '
            SELECT *
            FROM matiere
        ';

        $vu_matiereArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($vu_matiereArray as $vu_matiere) {
            $vu_matiereList[] = new Matiere($vu_matiere['id_matiere'], $vu_matiere['matiere'], $vu_matiere['id_cursus']);
        }

        return $vu_matiereList;
    }


    //CLASS PROFESSEUR

    public function getProfesseur() {
        $professeurList = [];

        $sql = "SELECT * from professeur
        where id_utilisateur =" . $_SESSION['id_utilisateur'];
            
        $professeurArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($professeurArray as $prof) {
            $professeurList[] = new Professeur($prof['id_professeur'], $prof['nom'],
            $prof['prenom'], $prof['matiere'],$_SESSION['id_utilisateur']);
        }

        return $professeurList;
    }

    //CLASS Parent
    public function getParent() {
        $parentList = [];

        $sql = "SELECT * from famille
        where id_utilisateur =" . $_SESSION['id_utilisateur'];
            
        $parentArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($parentArray as $parent) {
            $parentList[] = new Famille($parent['id_famille'], $parent['nom_parent'],
            $parent['prenom_parent'], $parent['mobile'],$parent['adresse'], $parent['code_postal'],
            $parent['nom_enfant'], $parent['prenom_enfant'],$parent['dn_enfant'], $parent['id_cursus'],
            $parent['id_etudiant'],$_SESSION['id_utilisateur']);
        }

        return $parentList;
    }

    //class etudiant
    public function getEtudiant() {
        $etudiantList = [];
        
        $sql = "SELECT * FROM etudiant
        JOIN cursus ON cursus.id_cursus = etudiant.id_cursus
        WHERE  id_utilisateur = ". $_SESSION['id_utilisateur'];

        $etudiantArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($etudiantArray as $etudiant) {
            $etudiantList[] = new Etudiant($etudiant['id_etudiant'],$etudiant['nom'], $etudiant['prenom'],
            $etudiant['date_naissance'],  $etudiant['cursus'],  $etudiant['id_cursus'], $_SESSION['id_utilisateur']);
        }
        return $etudiantList;
    }


    /// class note vu professeur   
    public function getetudiantprof() {


        $etudiantprofList = [];

        $sql= " SELECT * from etudiant a 
        join professeur b where b.id_utilisateur=". $_SESSION['id_utilisateur'];

        $etudiantprofArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($etudiantprofArray as $note) {
            $etudiantprofList[] = new Etudiant($note['id_etudiant'],$note['nom'], $note['prenom'],$note['date_naissance'],
            $note['cursus'], $note['id_utilisateur'], $note['id_cursus'], $_SESSION['id_utilisateur']);
        }

        return $etudiantprofList;
    }

    //class matiere pour le prof

    public function getmatiere1(){
        $matiereList1 = [];

        $sql = "SELECT * FROM matiere ";


        $matiereArray1 = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($matiereArray1 as $matiere1) {
            $matiereList1[] = new Matiere($matiere1['id_matiere'],$matiere1['matiere'], $matiere1['id_cursus']);
        }

        return $matiereList1;


    }
    // class matiere vu enfant
    public function getmatiere() {
        $matiereList = [];

        $sql = "SELECT * FROM matiere a join note b  on b.id_matiere = a.id_matiere WHERE id_utilisateur=". $_SESSION['id_utilisateur'];


        $matiereArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($matiereArray as $matiere) {
            $matiereList[] = new Matiere($matiere['id_matiere'],$matiere['matiere'], $matiere['id_cursus']);
        }

        return $matiereList;
    }

    // class matiere vu parents 

    public function getmatiereparent() {
        $matiereList1 = [];

        $sql ="SELECT  DISTINCT a.id_matiere, a.matiere, a.id_cursus from matiere a 
        join note b on b.id_matiere = a.id_matiere 
        join etudiant c WHERE b.id_etudiant=(SELECT c.id_etudiant from famille c WHERE c.id_utilisateur=". $_SESSION['id_utilisateur'].") ";

        $matiereArray1 = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($matiereArray1 as $matiere) {
            $matiereList1[] = new Matiere($matiere['id_matiere'],$matiere['matiere'], $matiere['id_cursus']);
        }

        return $matiereList1;
    }








    /// class note vu enfant   
    public function getnote() {


        $noteList = [];

        $sql= " SELECT * FROM note a join matiere b  on b.id_matiere = a.id_matiere WHERE id_utilisateur =". $_SESSION['id_utilisateur'];

        //  $sql = "SELECT * FROM note a join matiere b on b.id_matiere


        $noteArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($noteArray as $note) {
            $noteList[] = new Note($note['id_note'],$note['id_matiere'], $note['note'],$note['appreciation'],
            $note['id_etudiant'], $note['id_professeur'], $note['id_cursus'], $_SESSION['id_utilisateur']);
        }

        return $noteList;
    }

    // class note vu parents 
    public function getnoteparent(){
        $noteList1 = [];

        $sql = "SELECT a.id_note, a. id_matiere, a.note, a.appreciation, a.id_etudiant, a.id_professeur, a.id_cursus, a.id_utilisateur, c.matiere FROM note a 
        
        join matiere c on c.id_matiere = a.id_matiere
        WHERE a.id_etudiant=(SELECT b.id_etudiant from famille b WHERE b.id_utilisateur=". $_SESSION['id_utilisateur'].")";


        $noteArray1 = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        foreach($noteArray1 as $note) {
            $noteList1[] = new Note($note['id_note'],$note['id_matiere'], $note['note'],$note['appreciation'],
            $note['id_etudiant'], $note['id_professeur'], $note['id_cursus'], $_SESSION['id_utilisateur']);
        }

        return $noteList1;



    }


}             
