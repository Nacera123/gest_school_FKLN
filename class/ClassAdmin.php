<?php

Class Admin {

    //objets
    private $nmr_familles;
    private $vufamille_profilenfant;
    private $profParCursus;
    private $cursus    


    //constructeur
    public function __construct($nmr_familles_Arg, $vufamille_profilenfant_Arg, $profParCursus_Arg, $cursus_Arg ){

        $this -> nmr_familles = $nmr_familles_Arg;
        $this -> vufamille_profilenfant = $vufamille_profilenfant_Arg;
        $this -> profParCursus = $profParCursus_Arg;
        $this -> cursus = $cursus_Arg;

    }

    //les geteur

    public function getNmr_familles(){
        $this -> nmr_familles ;

    }

    public function getVufamille_profilenfant(){
        $this -> vufamille_profilenfant ;

    }

    public function getProfParCursus(){
        $this -> profParCursus;

    }

    public function getCursus(){
        $this -> cursus;

    }

    //les seteur

    public function setNmr_familles(){

        if(is_string($nmr_familles)){

            $this -> nmr_familles = $nmr_familles_Arg;
        }   
        return $this ;
    }

    public function setVufamille_profilenfant(){

        if(is_string($vufamille_profilenfant)){

            $this -> vufamille_profilenfant = $vufamille_profilenfant_Arg;
        }   
        return $this ;
    }

    public function setProfParCursus(){

        if(is_string($profParCursus)){

            $this -> profParCursus = $profParCursus_Arg;
        }   
        return $this ;
    }

    public function setCursus(){

        if(is_string($cursus)){

            $this -> cursus = $cursus_Arg;
        }    
        return $this ;
    }








}