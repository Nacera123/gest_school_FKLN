<?php

class Note {

    // Version propriétés privées
    private $id_note;
    private $id_matiere;
    private $note;
    private $appreciation;
    private $id_etudiant;
    private $id_professeur;
    private $id_cursus;
    private $matiere;



    // le constructeur
    public function __construct($id_note, $id_matiere, $note, $appreciation, $id_etudiant, $id_professeur, $id_cursus, $matiere)
    {
        $this-> id_note = $id_note;
        $this-> id_matiere= $id_matiere;
        $this-> note = $note;
        $this-> appreciation = $appreciation;
        $this-> id_etudiant = $id_etudiant;
        $this-> id_professeur = $id_professeur;
        $this-> id_cursus = $id_cursus;
        $this-> matiere = $matiere;



    }


    //get set pour l'id_note
    public function getidnoteN()
    {
        return $this-> id_note;
    }

    public function setidnoteN($id_note): self
    {
        $this-> id_note = $id_note;

        return $this;
    }

    //get set pour la matiere
    public function getid_matiere()
    {
        return $this-> id_matiere;
    }

    public function setid_matiere($id_matiere): self
    {
        if(is_string($id_matiere)) {
            $this->id_matiere = $id_matiere;
        }

        return $this;
    }

    //get set pour la note

    public function getnoteN()
    {
        return $this-> note;
    }


    public function setnoteN($note): self
    {
        if(is_string($note)) {
            $this->note = $note;
        }

        return $this;
    }

    //get set pour l'appreciation'

    public function getappreciationN()
    {
        return $this-> appreciation;
    }

    public function setappreciationN($appreciation): self
    {
        if(is_string($appreciation)) {
            $this->appreciation = $appreciation;
        }

        return $this;
    }

    //get set pour l'id_etudiant'
    public function getidetudiantN()
    {
        return $this-> id_etudiant;
    }


    public function setidetudiantN($id_etudiant): self
    {
        if(is_string($id_etudiant)) {
            $this->id_etudiant = $id_etudiant;
        }

        return $this;
    }

    //get set pour l'id_professeur'
    public function getidprofesseurN()
    {
        return $this->id_professeur;
    }


    public function setidprofesseurN($id_professeur): self
    {
        if(is_string($id_professeur)) {
            $this->id_professeur = $id_professeur;
        }

        return $this;
    }
    
    //get set pour l'id_cursus
    public function getidcursusN()
    {
        return $this->id_cursus;
    }


    public function setidcursusN($id_cursus): self
    {
        if(is_string($id_cursus)) {
            $this->id_cursus = $id_cursus;
        }

        return $this;
    }
    

        //get set pour la metiere
        public function getmetiere()
        {
            return $this->metiere;
        }
    
    
        public function setmetiere($metiere): self
        {
            if(is_string($metiere)) {
                $this->metiere = $metiere;
            }
    
            return $this;
        }
    
}