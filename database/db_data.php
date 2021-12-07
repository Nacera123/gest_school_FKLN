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
    

    public function insert_user($data=[])
    {
   
        $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal,fonction) VALUES
         (:nom, :prenom, :email, :mot_de_passe, :mobile, :adresse, :code_postal, :fonction)";
        $res= $this->dbh->prepare($sql)->execute($data);
        
        return $res;
    }


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


        // var_dump ($user['fonction']);exit;
      
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['fonction'] == 'admin') {
                header('location:inscription');		  
            }elseif($user['fonction'] == 'parent') {
                header('location:index1');    
            }elseif($user['fonction'] == 'professeur') {
                header('location:professeur.php'); 
            }elseif($user['fonction'] == 'etudiant') {
                header('location:inscription'); 
            }else{
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }

    }

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




}