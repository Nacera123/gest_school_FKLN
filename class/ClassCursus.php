<?php


$FormationList = [
    1 => new Formation('parcous histoire des arts',5200),
    2 => new Formation("parcours d'education artistique et culturelle", 6000),
    3 => new Formation('parcours science', 7000),
    4 => new Formation('parcours math', 8000),
];


Class Formation {


    public $cursus;
    public $frais ;



    public function __construct($cursus_Arg, $frais_Arg){

        $this -> cursus = $cursus_Arg ;
        $this -> frais = $frais_Arg ;


    }



}

$fruitList= new fruit ('rouge'.'10g','5cm');





class fruit{

    public $couleur;
    public $poids;
    public $taille;

    
    public function __construct($couleur_Arg, $poids_Arg,$taille_Arg ){
        $this -> couleur = $couleur_Arg;
        $this -> poids = $poids_Arg;
        $this -> taille= $taille_Arg;


    }



}





// echo '<pre>';
var_dump($fruitList)  ;