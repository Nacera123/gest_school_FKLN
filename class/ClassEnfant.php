<?php


$EnfantList =  new Enfant ('dubois','dubois','01/11/2015', 1234567);
$NoteList =  [
1=> new Note ('PHYSIQUE', 10, 'passable'),
2=> new Note ('CHIMIE', 10, 'passable'),
3=> new Note ('SCIENCE', 12, 'bien'),
4=> new Note ('LITERATURE', 12, 'bien'),
5=> new Note ('dessin', 12, 'bien'),

];


Class Enfant {

    // les objets 

    private  $nom;
    private $prenom;
    private $date;
    private $numero;

    // le constructeur
    public function __construct($nom_Arg, $prenom_Arg,$date_Arg, $numero_Arg){

        $this -> nom = $nom_Arg;
        $this -> prenom = $prenom_Arg;
        $this -> date = $date_Arg;
        $this -> numero = $numero_Arg;


    }
    

    //get set pour le nom
    public function get_Nom(){

        return $this->nom ;
    }

    public function set_Nom(){

        if(is_string($nom)){

            $this -> nom = $nom_Arg ;
        }   
        return $this ;
    }

    //get set pour prenom

    public function get_Prenom(){

        return $this->prenom ;
    }

    public function set_Prenom(){

        if(is_string($prenom)){

            $this -> prenom = $prenom_Arg ;
        }   
        return $this ;
    }

    //get et set pour la date 

    public function get_date(){

        return $this->date ;
    }


    public function set_date(){

        if(is_string($date)){

            $this -> date = $date_Arg ;
        }   
        return $this ;
    }
    
    //get et set pour les numero

    public function get_Numero(){

        return $this->numero ;
    }


    public function set_Numero(){

        if(is_string($numero)){

            $this -> numero = $numero_Arg ;
        }   
        return $this ;
    }




}

// echo'<pre>';
// var_dump($EnfantList -> get_Numero());
// echo'<pre>';


Class Note extends Enfant {
    public $matiere;
    private $note;
    private $appreciation;


    public function __construct($note_Arg, $appreciation_Arg, $matiere_Arg){

        $this -> note = $note_Arg;
        $this -> appreciation = $appreciation_Arg;
        $this -> matiere = $matiere_Arg;

    }

    //get set pour les notes
    public function get_note(){

        return $this -> note;
    }

    public function set_note(){

        if(is_string ($note)){
            $this -> note = $note_Arg;

        }

        return $this;
    }

    //get set pour l'appreciation 

    public function get_appreciation(){

        return $this -> appreciation;
    }

    public function set_appreciation(){

        if(is_string ($appreciation)){
            $this -> appreciation = $appreciation_Arg;

        }

        return $this;
    }






}