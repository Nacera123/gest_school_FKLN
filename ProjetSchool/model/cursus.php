<?php

Class Cursus {

    public $id_cursus;
    public $nom_cursus;
    public $frais_cursus ;

     // le constructeur
    public function __construct($id_cursus,$cursus_Arg, $frais_Arg){
        $this -> id_cursus = $id_cursus ;
        $this -> nom_cursus = $cursus_Arg ;
        $this -> frais_cursus = $frais_Arg ;      
    }

    public function getIdCursus()
    {
        return $this->id_cursus;
    }
    public function getNameCursus()
    {
        return $this->nom_cursus;
    }
    public function getFrais()
    {
        return $this->frais_cursus;
    }
    
}

