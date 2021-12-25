<?php
// class abstract Famille
class  Famille  {

    // Version propriétés privées
    private $id_famille;
    private $nom_parent;
    private $prenom_parent;
    private $mobile;
    private $adresse;
    private $code_postal;


    
    private $nom_enfant;
    private $prenom_enfant;
    private $dn_enfant;
    private $id_cursus;
    private $id_etudiant;
    private $id_utilisateur;




    // le constructeur
    public function __construct($id_famille, $nom_parent, $prenom_parent, $mobile, $adresse,
     $code_postal, $nom_enfant, $prenom_enfant,$dn_enfant, $id_cursus,$id_etudiant, $id_utilisateur)
    {
        $this-> id_famille = $id_famille;
        $this-> nom_parent= $nom_parent;
        $this-> prenom_parent = $prenom_parent;
        $this-> mobile = $mobile;
        $this-> adresse = $adresse;
        $this-> code_postal = $code_postal;
        $this-> nom_enfant= $nom_enfant;
        $this-> prenom_enfant = $prenom_enfant;
        $this-> dn_enfant = $dn_enfant;
        $this-> id_cursus = $id_cursus;
        $this-> id_etudiant = $id_etudiant;
        $this-> id_utilisateur = $id_utilisateur;
    }


    //get set pour l'id_utilisateur
    public function getid_utilisateurU()
    {
        return $this-> id_famille;
    }

    public function setid_utilisateurU($id_famille): self
    {
        $this-> id_famille = $id_famille;

        return $this;
    }    

    //get set pour la nom
    public function getnomU()
    {
        return $this-> nom_parent;
    }
    public function setnomU($nom_parent): self
    {
        if(is_string($nom_parent)) {
            $this->nom_parent= $nom_parent;
        }

        return $this;
    }
    

    //get set pour lE prenom
    public function getprenomU()
    {
        return $this-> prenom_parent;
    }

    public function setprenomU($prenom_parent): self
    {
        if(is_string($prenom_parent)) {
            $this->prenom_parent = $prenom_parent;
        }

        return $this;
    }
    
    
    //get set pour le mobile
    public function getmobileU()
    {
        return $this->mobile;
    }

    public function setmobileU($mobile): self
    {
        if(is_string($mobile)) {
            $this->mobile = $mobile;
        }

        return $this;
    }

    //get set pour l'adresse
    public function getadresseU()
    {
        return $this->adresse;
    }

    public function setadresseU($adresse): self
    {
        if(is_string($adresse)) {
            $this->adresse = $adresse;
        }

        return $this;
    }
    

    //get set pour le code_postal
    public function getcode_postalU()
    {
        return $this->code_postal;
    }

    public function setcode_postalU($code_postal): self
    {
        if(is_string($code_postal)) {
            $this->code_postal = $code_postal;
        }

        return $this;
    }
    
     //get set pour l'email

    public function getNomEnf()
    {
        return $this-> nom_enfant;
    }

    public function setNomEnf($nom_enfant): self
    {
        if(is_string($nom_enfant)) {
            $this->nom_enfant = $nom_enfant;
        }

        return $this;
    }



  //get set pour le mot_de_passe
  public function getPrenomEnf()
  {
      return $this-> prenom_enfant;
  }

  public function setPrenomEnf($prenom_enfant): self
  {
      if(is_string($prenom_enfant)) {
          $this->prenom_enfant = $prenom_enfant;
      }

      return $this;
  }



    //get set pour la date de naissance
    public function getdnEnf()
    {
        return $this->dn_enfant;
    }


    public function setdnEnf($dn_enfant): self
    {
        if(is_string($dn_enfant)) {
            $this->dn_enfant = $dn_enfant;
        }

        return $this;
    }
    //get set pour id_cursus

    public function getidcursusF()
    {
        return $this->id_cursus;
    }


    public function setidcursusF($id_cursus): self
    {
        if(is_string($id_cursus)) {
            $this->id_cursus = $id_cursus;
        }

        return $this;
    }

    
    //get set pour id_etudiant
    public function getidetudiantF()
    {
        return $this->id_etudiant;
    }


    public function setidetudiantF($id_etudiant): self
    {
        if(is_string($id_etudiant)) {
            $this->id_etudiant = $id_etudiant;
        }

        return $this;
    }

    //get set pour id_utilisateur
    public function getid_utilisateur()
    {
        return $this->id_utilisateur;
    }


    public function setid_utilisateur($id_utilisateur): self
    {
        if(is_string($id_utilisateur)) {
            $this->id_utilisateur = $id_utilisateur;
        }

        return $this;
    }
    

}