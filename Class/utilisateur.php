<?php
class utilisateur {

    // Version propriétés privées
    private $id_utilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $mot_de_passe;
    private $mobile;

    private $adresse;
    private $code_postal;
    private $fonction;




    // le constructeur
    public function __construct($id_utilisateur, $nom, $prenom, $email, $mot_de_passe, $mobile, $adresse, $code_postal, $fonction)
    {
        $this-> id_utilisateur = $id_utilisateur;
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> email = $email;
        $this-> mot_de_passe = $mot_de_passe;
        $this-> mobile = $mobile;
        $this-> adresse = $adresse;
        $this-> code_postal = $code_postal;
        $this-> fonction = $fonction;


    }


    //get set pour l'id_utilisateur
    public function getid_utilisateur()
    {
        return $this-> id_utilisateur;
    }

    public function setid_utilisateur($id_utilisateur): self
    {
        $this-> id_utilisateur = $id_utilisateur;

        return $this;
    }

    //get set pour le nom
    public function getnom()
    {
        return $this-> nom;
    }

    public function setnom($nom): self
    {
        if(is_string($nom)) {
            $this->nom = $nom;
        }

        return $this;
    }

    //get set pour le prenom

    public function getprenom()
    {
        return $this-> prenom;
    }


    public function setprenom($prenom): self
    {
        if(is_string($prenom)) {
            $this->prenom = $prenom;
        }

        return $this;
    }

    //get set pour l'email

    public function getemail()
    {
        return $this-> email;
    }

    public function setemail($email): self
    {
        if(is_string($email)) {
            $this->email = $email;
        }

        return $this;
    }


    //get set pour le mot_de_passe
    public function getmot_de_passe()
    {
        return $this->mot_de_passe;
    }

    public function setmot_de_passe($mot_de_passe): self
    {
        if(is_string($mot_de_passe)) {
            $this->mot_de_passe = $mot_de_passe;
        }

        return $this;
    }

    //get set pour le mobile
    public function getmobile()
    {
        return $this-> mobile;
    }

    public function setmobile($mobile): self
    {
        if(is_string($mobile)) {
            $this->mobile = $mobile;
        }

        return $this;
    }

    


    //get set pour l'adresse
    public function getadresse()
    {
        return $this-> adresse;
    }

    public function setadresse($adresse): self
    {
        $this-> adresse = $adresse;

        return $this;
    }    

    //get set pour le code_postal
    public function getcode_postal()
    {
        return $this-> code_postal;
    }

    public function setcode_postal($code_postal): self
    {
        $this-> code_postal = $code_postal;

        return $this;
    }    

    //get set pour la fonction
    public function getfonction()
    {
        return $this-> fonction;
    }

    public function setfonction($fonction): self
    {
        $this-> fonction = $fonction;

        return $this;
    }    
    
}