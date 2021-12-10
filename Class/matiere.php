<?php

class Matiere {

    // Version propriétés privées
    private $id_matiere;
    private $matiere;
    private $id_cursus;




    // le constructeur
    public function __construct($id_matiere, $matiere, $id_cursus)
    {
        $this-> id_matiere = $id_matiere;
        $this-> matiere= $matiere;
        $this-> id_cursus = $id_cursus;
    }


    //get set pour l'id_matiere
    public function getid_matiereM()
    {
        return $this-> id_matiere;
    }

    public function setid_matiereM($id_matiere): self
    {
        $this-> id_matiere = $id_matiere;

        return $this;
    }    

    //get set pour la matiere
    public function get_matiereM()
    {
        return $this-> matiere;
    }
    public function set_matiereM($matiere): self
    {
        if(is_string($matiere)) {
            $this->matiere = $matiere;
        }

        return $this;
    }
    
    

    //get set pour l'id_cursus

    public function getid_cursusM()
    {
        return $this-> id_cursus;
    }

    public function setid_cursusM($id_cursus): self
    {
        if(is_string($id_cursus)) {
            $this->id_cursus = $id_cursus;
        }

        return $this;
    }
}  
