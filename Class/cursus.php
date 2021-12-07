<?php

class cursus {

    // Version propriétés privées
    private $id_cursus;
    private $nom_cursus;
    private $frais_cursus;


    // le constructeur
    public function __construct($id_cursus, $nom_cursus, $frais_cursus)
    {
        $this-> id_cursus = $id_cursus;
        $this-> nom_cursus = $nom_cursus;
        $this-> frais_cursus = $frais_cursus;
    }


    //get set pour l'id_cursus
    public function getid_cursusC()
    {
        return $this-> id_cursus;
    }

    public function setid_cursusC($id_cursus): self
    {
        $this-> id_cursus = $id_cursus;

        return $this;
    }

    //get set pour le nom_cursus
    public function getnom_cursusC()
    {
        return $this-> nom_cursus;
    }

    public function setnom_cursusC($nom_cursus): self
    {
        if(is_string($nom_cursus)) {
            $this->nom_cursus = $nom_cursus;
        }

        return $this;
    }

    //get set pour les frais_cursus

    public function getfrais_cursusC()
    {
        return $this-> frais_cursus;
    }


    public function setfrais_cursusC($frais_cursus): self
    {
        if(is_string($frais_cursus)) {
            $this->frais_cursus = $frais_cursus;
        }

        return $this;
    }
}
