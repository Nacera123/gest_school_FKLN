<?php

class Professeur {

    // Version propriétés privées
    private $id_professeur;
    private $nom;
    private $prenom;
    private $matiere;
    private $id_utilisateur;

    // le constructeur
    public function __construct($id_professeur, $nom, $prenom, $matiere,$id_utilisateur)
    {
        $this-> id_professeur = $id_professeur;
        $this-> nom = $nom;
        $this-> prenom = $prenom;
        $this-> matiere = $matiere;
        $this-> id_utilisateur = $id_utilisateur;
    }


    //get set pour l'id_professeur
    public function getid_professeurP()
    {
        return $this-> id_professeur;
    }

    public function setid_professeurP($id_professeur): self
    {
        $this-> id_professeur = $id_professeur;

        return $this;
    }

    //get set pour le nom
    public function getnomP()
    {
        return $this-> nom;
    }

    public function setnomP($nom): self
    {
        if(is_string($nom)) {
            $this->nom = $nom;
        }

        return $this;
    }

    //get set pour le prenom

    public function getprenomP()
    {
        return $this-> prenom;
    }


    public function setprenomP($prenom): self
    {
        if(is_string($prenom)) {
            $this->prenom = $prenom;
        }

        return $this;
    }

    //get set pour la matiere

    public function getmatiereP()
    {
        return $this-> matiere;
    }

    public function setmatiereP($matiere): self
    {
        if(is_string($matiere)) {
            $this->matiere = $matiere;
        }

        return $this;
    }

    public function getIdUP()
    {
        return $this-> matiere;
    }

    public function setIdUP($matiere): self
    {
        if(is_string($matiere)) {
            $this->matiere = $matiere;
        }

        return $this;
    }


}