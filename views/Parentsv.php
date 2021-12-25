
<?php
  var_dump ($_SESSION['id_utilisateur']) ;

?>

<body>



  <div class = "formulaire">

    <div class="formulaire1"> <h1>Valider mes informations</h1></div>






      <?php            

        if(!empty($_POST['nom_parent']) ||!empty($_POST['prenom_parent'])|| !empty($_POST['mobile'])
        || !empty($_POST['adresse'])|| !empty($_POST['code_postal']) 
        || !empty($_POST['nom_enfant']) || !empty($_POST['prenom_enfant'])|| !empty($_POST['dn_enfant'])
        || !empty($_POST['id_cursus'])|| !empty($_POST['id_etudiant'])){

        $nom_parent            =$_POST['nom_parent'];
        $prenom_parent         =$_POST['prenom_parent'];
        $mobile                =$_POST['mobile'];
        $adresse               =$_POST['adresse'];
        $code_postal           =$_POST['code_postal'];
        $nom_enfant               =$_POST['nom_enfant'];
        $prenom_enfant            =$_POST['prenom_enfant'];
        $dn_enfant                =$_POST['dn_enfant'];
        $id_cursus                =$_POST['id_cursus'];
        $id_etudiant              =$_POST['id_etudiant'];

        $database= new DBData (); 
        $data = [
          'nom_parent'=>$nom_parent,
          'prenom_parent'=>$prenom_parent,
          'mobile'=>$mobile,
          'adresse'=>$adresse,
          'code_postal'=>$code_postal,
          'nom_enfant'=>$nom_enfant,
          'prenom_enfant'=>$prenom_enfant,
          'dn_enfant'=>$dn_enfant,
          'id_cursus'=>$id_cursus,
          'id_etudiant'=>$id_etudiant,
          'id_utilisateur'=>  $_SESSION['id_utilisateur'],
        ];

        $res = $database->validationfamille($data);


        if($res){
          echo "<div class='sucess'>
            <h3>Vous êtes inscrit avec succès.</h3>
            <h3>Pour plus de sécurité une double autehtification est indisponsable </h3>
            <p>Cliquez ici pour vous <a href='connexion'> authentifier</a></p>

          </div>";
        }
        }else {


      ?>



      <div class="container">
        <form method='POST'>
          <?php foreach ($viewVars['utilisateurList'] as $utilisateur) : ?>
            <div class="row mr-1">

              <div class="col">
                <label value ="">votre nom</label>
                <input type="text" class="form-control" name ="nom_parent" value="<?= $utilisateur-> getnom()?>" >
              </div>

              <div class="col">
                <label value ="">votre prenom</label>
                <input type="text" class="form-control" name ="prenom_parent" value ="<?= $utilisateur-> getprenom()?>">
              </div>

            </div><br>

            <div class="row mr-1">

              <div class="col">
                <label value ="">votre N de telephone</label>
                <input type="text" class="form-control"  name ="mobile" value ="<?= $utilisateur-> getmobile()?>">
              </div>

              <div class="col">
                <label value ="">votre adresse</label>
                <input type="text" class="form-control"  name ="adresse" value = "<?= $utilisateur-> getadresse()?>">
              </div>

              <div class="col">
                <label value ="">votre code_postal</label>
                <input type="number" class="form-control" name ="code_postal" value ="<?= $utilisateur-> getcode_postal()?>">
              </div>

            </div><br>

          <?php endforeach;?> 


          <?php foreach ($viewVars['utilisateurList1'] as $etudiant) : ?>          

            <div class="row mr-1">

              <div class="col">
                <label value =""> le nom de votre enfant</label>
                <input type="text" class="form-control"name ="nom_enfant" value="<?= $etudiant-> getnomE()?>">
              </div>

              <div class="col">
                <label value =""> le prenom de votre enfant</label>
                <input type="text" class="form-control" name ="prenom_enfant" value ="<?= $etudiant-> getprenomE()?>">
              </div>

            </div><br> 

            <div class="row mr-1">
              <div class="col">
                <label value ="">La date de naissance  enfant</label>
                <input type="text" class="form-control"  name ="dn_enfant" value ="<?= $etudiant->getdate_naissanceE()?>">
              </div>

              <div class="col">
                <label value ="">son cursus</label>
                <input type="text" class="form-control"  name ="id_cursus" value ="<?= $etudiant->getid_cursusE()?>-<?= $etudiant->getcursus()?>">
              </div>
            </div><br>

            <div class="col">
              <label value ="">identifiant de votre enfant</label>
              <input type="text" class="form-control"  name ="id_etudiant" value="<?= $etudiant-> getid_etudiantE()?>">
            </div><br>

          <?php endforeach; ?>

          <div class="bouton">
            <input type ="submit" class="btn btn-secondary" value="VALIDER" name="submit">
          </div>






        </form>

        <?php 
      } 
      ?>
      </div>

    </div>

  </div>
        
</body>


