<?php


//  *Classe permettant de retourner des données stockées dans la base de données

class DBData {
/** @var PDO */
	
        private $dbh;

    //  Constructeur se connectant à la base de données à partir des informations du fichier de configuration
    public function __construct() {
        
        $configData = parse_ini_file( __DIR__ .  '/../config.conf');
        // Récupération des données du fichier de config
        // la fonction parse_ini_file parse le fichier et retourne un array associatif
       
       
        try {
            $this->dbh = new PDO(
                //PDO est classe native de php qui crée la connexion a la base de donnée sql
                
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
    $_SESSION["email"] = $_POST["email"]; 
    $_SESSION["id_utilisateur"] = $user["id_utilisateur"];

    // var_dump($_SESSION["id_utilisateur"] );exit;
    // var_dump ($user['fonction']);exit;
  
        // vérifier si l'utilisateur est un administrateur ou un utilisateur
        if ($user['fonction'] == 'admin') {
            header('location:admin');		  
        }else if($user['fonction'] == 'parent') {
            header('location: parents');    
        }else if($user['fonction'] == 'professeur') {
            header('location: prof'); 
        }else if($user['fonction'] == 'etudiant') {
            header('location:enfant'); 
        }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}


// FONCTION POUR LES CLASS

    // Fonction CLASS=CURSUS 
   public function getCursus() {
       $cursusList = [];
       
       $sql = "SELECT * FROM cursus";

       $cursusArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

       foreach($cursusArray as $cursus) {
           $cursusList[] = new Cursus($cursus['id_cursus'],$cursus['nom_cursus'], $cursus['frais_cursus']);
       }

       return $cursusList;
   }

    // Fonction CLASS= ENFANT et COMPTE = ENFANT
   public function getEtudiant() {
    $etudiantList = [];
    
    $sql = "SELECT *
    FROM etudiant 
    JOIN cursus ON cursus.id_cursus = etudiant.id_cursus
    WHERE  id_utilisateur = ". $_SESSION['id_utilisateur'];

    $etudiantArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach($etudiantArray as $etudiant) {
        $etudiantList[] = new Etudiant($etudiant['id_etudiant'],$etudiant['nom'], $etudiant['prenom'],
         $etudiant['date_naissance'],  $_SESSION['id_utilisateur'],$etudiant['nom_cursus']);
    }

    return $etudiantList;
    }

    // Fonction CLASS=MATIERE et COMPTE=MATIERE 
    public function getMatiere() {
        $matiereList = [];
        
        $sql = "SELECT * FROM matiere";
    
        $matiereArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($matiereArray as $matiere) {
            $matiereList[] = new Matiere($matiere['id_matiere'], $matiere['matiere'],
             $matiere['id_cursus']);
        }
    
        return $matiereList;
    }



    public function getNote() {
        $noteList = [];
        
        $sql = "SELECT * FROM note
        WHERE  id_utilisateur = ". $_SESSION['id_utilisateur'];
    
        $noteArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($noteArray as $note) {
            $noteList[] = new Note($note['id_note'], $note['matiere'],$note['note'], 
            $note['appreciation'], $note['id_etudiant'],$note['id_professeur'],
            $note['id_cursus'],$_SESSION['id_utilisateur'],$note['id_famille']);
        }
    
        return $noteList;
    }



    public function getProfesseur() {
        $professeurList = [];
        
        $sql = "SELECT * FROM professeur
        WHERE id_utilisateur = ". $_SESSION['id_utilisateur'];
        
    
        $professeurArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($professeurArray as $prof) {
            $professeurList[] = new Professeur($prof['id_professeur'], $prof['nom'],
            $prof['prenom'], $prof['matiere'],$_SESSION['id_utilisateur']);
        }
    
        return $professeurList;
    }


    public function getFamille() {
        $familleList = [];
        
        $sql = "SELECT * 
        FROM famille
        -- INNER JOIN note ON note.id_famille = famille.id_famille
        WHERE id_utilisateur = ". $_SESSION['id_utilisateur'] ;
    
        $familleArray = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($familleArray as $famille) {
            $familleList[] = new Famille($famille['id_famille'], $famille['nom_parent'],
            $famille['prenom_parent'], $famille['mobile'], $famille['adresse'],
            $famille['code_postal'], $famille['nom_enfant'], $famille['prenom_enfant'],
            $famille['dn_enfant'], $famille['id_cursus'], $famille['id_etudiant'],$_SESSION['id_utilisateur']);
        }
    
        return $familleList;
    }


    // public function getNote2() {
    //     $note2List = [];
        
    //     $sql = "SELECT *
    //     FROM note
    //     INNER JOIN famille ON famille.id_famille = note.id_famille ";
    
    //     $note2Array = $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    //     foreach($note2Array as $notes) {
    //         $note2List[] = new Note($notes['id_note'], $notes['matiere'],$notes['note'], 
    //         $notes['appreciation'], $notes['id_etudiant'],$notes['id_professeur'],
    //         $notes['id_cursus'],$notes['id_utilisateur'],$notes['id_famille']);
    //     }
    
    //     return $note2List;
    // }


}




    
 