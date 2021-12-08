<?php

class Cursus_professeur {

    // Version propriétés privées
    private $id_cursus;
    private $id_professeur;


    // le constructeur
    public function __construct($id_cursus, $id_professeur)
    {
        $this-> id_cursus = $id_cursus;
        $this-> id_professeur = $id_professeur;
    }


    //get set pour l'id_cursus
    public function getid_cursusCP()
    {
        return $this-> id_cursus;
    }

    public function setid_cursusCP($id_cursus): self
    {
        $this-> id_cursus = $id_cursus;

        return $this;
    }

    //get set pour le id_professeur
    public function getid_professeurCP()
    {
        return $this-> id_professeur;
    }

    public function setid_professeurCP($id_professeur): self
    {
        if(is_string($id_professeur)) {
            $this->id_professeur = $id_professeur;
        }

        return $this;
    }

