<?php

class Etudiant {

    // Version propriétés privées
    private $id_etudiant;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $cursus;
    private $id_utilisateur;
    private $id_cursus;



    // le constructeur
    public function __construct($id_etudiant, $nom, $prenom, $date_naissance, $cursus, $id_utilisateur, $id_cursus)
    {
        $this-> id_etudiant = $id_etudiant;
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> date_naissance = $date_naissance;
        $this-> cursus = $cursus;
        $this-> id_utilisateur = $id_utilisateur;
        $this-> id_cursus = $id_cursus;

    }


    //get set pour l'id_etudiant
    public function getid_etudiantE()
    {
        return $this-> id_etudiant;
    }

    public function setid_etudiantE($id_etudiant): self
    {
        $this-> id_etudiant = $id_etudiant;

        return $this;
    }

    //get set pour le nom
    public function getnomE()
    {
        return $this-> nom;
    }

    public function setnomE($nom): self
    {
        if(is_string($nom)) {
            $this->nom = $nom;
        }

        return $this;
    }

    //get set pour le prenom

    public function getprenomE()
    {
        return $this-> prenom;
    }


    public function setprenomE($prenom): self
    {
        if(is_string($prenom)) {
            $this->prenom = $prenom;
        }

        return $this;
    }

    //get set pour la date_naissance

    public function getdate_naissanceE()
    {
        return $this-> date_naissance;
    }

    public function setdate_naissanceE($date_naissance): self
    {
        if(is_string($date_naissance)) {
            $this->date_naissance = $date_naissance;
        }

        return $this;
    }


    //get set pour le cursus

    public function getcursus()
    {
        return $this->cursus;
    }


    public function setcursus($cursus): self
    {
        if(is_string($cursus)) {
            $this->cursus = $cursus;
        }

        return $this;
    }

    //get set pour l'id utilisateur

    public function getidutilisateurE()
    {
        return $this-> id_utilisateur;
    }


    public function setidutilisateurE($id_utilisateur): self
    {
        if(is_string($id_utilisateur)) {
            $this->id_utilisateur = $id_utilisateur;
        }

        return $this;
    }



    public function getid_cursusE()
    {
        return $this->id_cursus;
    }


    public function setid_cursusE($id_cursus): self
    {
        if(is_string($id_cursus)) {
            $this->id_cursus = $id_cursus;
        }

        return $this;
    }


    
}
