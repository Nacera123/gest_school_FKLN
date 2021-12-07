<?php

$ProfList= new Prof('dodo', "le mechant", "mathematique");

Class Prof {

    // les objets 

    private $nom_professeur;
    private $prenom_professeur;
    public $nom_matiere;
  
    


    // le constructeur
    public function __construct($nom_professeur_Arg, $prenom_professeur_Arg,$nom_matiere_Arg){

        $this -> nom_professeur = $nom_professeur_Arg;
        $this -> prenom_professeur = $prenom_professeur_Arg;
        $this -> nom_matiere = $nom_matiere_Arg;

    }
    

    //get set pour le nom du professeur:
    public function get_Nom_professeur(){

        return $this->nom_professeur ;
    }

    public function set_Nom_professeur(){

        if(is_string($nom_professeur)){

            $this -> nom_professeur = $nom_professeur_Arg ;
        }   
        return $this ;
    }


    //get set pour le nom du professeur:
    public function get_Prenom_professeur(){

        return $this->prenom_professeur ;
    }

    public function set_Prenom_professeur(){

        if(is_string($prenom_professeur)){

            $this -> prenom_professeur = $prenom_professeur_Arg ;
        }   
        return $this ;
    }


    //get set pour le nom du professeur:
    public function get_Nom_matiere(){

        return $this->nom_matiere ;
    }

    public function set_Nom_matiere(){

        if(is_string($nom_matiere)){

            $this -> nom_matiere = $nom_matiere_Arg ;
        }   
        return $this ;
    }
    
    



}