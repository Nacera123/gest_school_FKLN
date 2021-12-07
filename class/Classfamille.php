<?php

$FamilleList =  new Famille ('dubois','toto','toto@gmail.com', '5 av du bonheur', 7500, 2547, 6500);



Class Famille {

    // les objets 

    private  $nomP;
    private $prenomP;
    private $emailP;
    private $adresseP;
    private  $cdP;
    private  $numP;
    private   $fraisP;

    // le constructeur
    public function __construct($nomP_Arg, $prenomP_Arg,$emailP_Arg, $adresseP_Arg, $cdP_Arg, $numP_Arg, $fraisP_Arg){

        $this -> nomP = $nomP_Arg;
        $this -> prenomP = $prenomP_Arg;
        $this -> emailP = $emailP_Arg;
        $this -> adresseP = $adresseP_Arg;
        $this -> cdP = $cdP_Arg;
        $this -> numP = $numP_Arg;
        $this -> fraisP = $fraisP_Arg;

    }
    

    //get set pour le nom
    public function get_NomP(){

        return $this->nomP ;
    }

    public function set_NomP(){

        if(is_string($nomP)){

            $this -> nomP = $nomP_Arg ;
        }   
        return $this ;
    }

    //get set pour prenom

    public function get_PrenomP(){

        return $this->prenomP ;
    }

    public function set_PrenomP(){

        if(is_string($prenomP)){

            $this -> prenomP = $prenomP_Arg ;
        }   
        return $this ;
    }

    //get et set pour l'email

    public function get_EmailP(){

        return $this->emailP ;
    }


    public function set_EmailP(){

        if(is_string($emailP)){

            $this -> emailP = $emailP_Arg ;
        }   
        return $this ;
    }
    
    //get et set pour l'adresse

    public function get_AdresseP(){

        return $this->adresseP ;
    }


    public function set_AdresseP(){

        if(is_string($adresseP)){

            $this -> adresseP = $adresseP_Arg ;
        }   
        return $this ;
    }

    //get et set pour le code postal


    public function get_CdP(){

        return $this-> cdP ;
    }


    public function set_CdP(){

        if(is_string($cdP)){

            $this -> cdP = $cdP_Arg ;
        }   
        return $this ;
    }


    //get et set pour les numero parents


    public function get_NumP(){

        return $this-> numP ;
    }


    public function set_NumP(){

        if(is_string($numP)){

            $this -> numP = $numP_Arg ;
        }   
        return $this ;
    }
    

    //get et set pour les frais


    public function get_FraisP(){

        return $this-> fraisP ;
    }


    public function set_FraisP(){

        if(is_string($fraisP)){

            $this -> fraisP = $fraisP_Arg ;
        }   
        return $this ;
    }
    


}

// echo'<pre>';
// var_dump($FamilleList -> get_NomP());
// echo'<pre>';
