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
    public function insert_user($data=[])
    {
   
        $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal,fonction) VALUES
         (:nom, :prenom, :email, :mot_de_passe, :mobile, :adresse, :code_postal, :fonction)";
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
            header('location:index1');    
        }elseif($user['fonction'] == 'professeur') {
            header('location:prof'); 
        }elseif($user['fonction'] == 'etudiant') {
            header('location:enfant'); 
        }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }

    }
// FONCTION POUR LES CLASS

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

    //CLASS PROFESSEUR

    public function getProfesseur() {
        $professeurList = [];

        $sql = "SELECT * from professeur
        -- professeur a join utilisateur b join 
        where id_utilisateur =" . $_SESSION['id_utilisateur'];
        
        // $sql = "SELECT * FROM professeur
        // JOIN utilisateur ON utilisateur.id_utilisateur = professeur.id_utilisateur

        // WHERE id_utilisateur = ". $_SESSION['id_utilisateur'];
        
    
        $professeurArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($professeurArray as $prof) {
            $professeurList[] = new Professeur($prof['id_professeur'], $prof['nom'],
            $prof['prenom'], $prof['matiere'],$_SESSION['id_utilisateur']);
        }
    
        return $professeurList;
    }

    public function getEtudiant() {
        $etudiantList = [];
        
        $sql = "SELECT * FROM etudiant
        JOIN cursus ON cursus.id_cursus = etudiant.id_cursus
        WHERE  id_utilisateur = ". $_SESSION['id_utilisateur'];
    
        $etudiantArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($etudiantArray as $etudiant) {
            $etudiantList[] = new Etudiant($etudiant['id_etudiant'],$etudiant['nom'], $etudiant['prenom'],
            $etudiant['date_naissance'],  $_SESSION['id_utilisateur'],$etudiant['nom_cursus']);
        }
        return $etudiantList;
    }

    public function getmatiere() {
        $matiereList = [];
        // * from matiere join etudiant b 
        // DISTINCT id_matiere, matiere, id_cursus join etudiant b
        $sql = "SELECT DISTINCT a.id_matiere, a.matiere, a.id_cursus, b.nom, b.prenom from matiere a join etudiant b 
        
        WHERE b.id_utilisateur = ". $_SESSION['id_utilisateur'];
    
        $matiereArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($matiereArray as $matiere) {
            $matiereList[] = new Matiere($matiere['id_matiere'],$matiere['matiere'], $matiere['id_cursus']);
        }
    
        return $matiereList;
    }

    public function getnote() {
        $noteList = [];

        $sql = "SELECT * FROM note 
        where id_utilisateur =". $_SESSION['id_utilisateur'];

        // * from note join etudiant b
        // $sql = "SELECT DISTINCT a.id_note, a.id_matiere, a.note, a.appreciation, a.id_etudiant, a.id_professeur, a.id_cursus , b.nom, b.prenom from note a join etudiant b join matiere c  
        
        // WHERE b.id_utilisateur = ". $_SESSION['id_utilisateur'];
    
        $noteArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($noteArray as $note) {
            $noteList[] = new Note($note['id_note'],$note['id_matiere'], $note['note'],$note['appreciation'],
            $note['id_etudiant'], $note['id_professeur'], $note['id_cursus'], $_SESSION['id_utilisateur']);
        }
    
        return $noteList;
    }


    


}             
// -- $sql = "SELECT DISTINCT * FROM etudiant 
   




// 