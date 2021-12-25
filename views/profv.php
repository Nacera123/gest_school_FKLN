
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <div class = "formulaire">
      <div class="formulaire1"> <h1>Valider mes informations</h1></div><br><br>
        <div class="container">


        <?php
    
    var_dump ($_SESSION['id_utilisateur']);   
                  

            if(!empty($_POST['nom']) ||!empty($_POST['prenom']) || !empty($_POST['matiere'])){

                $nom =$_POST['nom'];
                $prenom =$_POST['prenom'];
                $matiere =$_POST['matiere'];


                $database= new DBData (); 
                $data1 = [
                    'nom' => $nom,
                    'prenom' => $prenom,

                    'matiere' => $matiere,
                    'id_utilisateur'=>  $_SESSION['id_utilisateur']

                ];
        
                $res1 = $database->validation($data1);


                if($res1){
                    echo "<div class='sucess'>
                            <h3>Vous êtes inscrit avec succès.</h3>
                            <h3>Pour plus de sécurité une double autehtification est indisponsable </h3>
                            <p>Cliquez ici pour vous <a href='connexion'> authentifier</a></p>
                    </div>";
            
                }
            }else {
    

                
        
        ?>







        <br><br>
        <form method='POST'>
        
            <div class="row mr-1">
                <br><br>
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" name ="nom">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Prénom" name ="prenom">
              </div>
            </div><br>



            <div class="form-group">
              <label for="selection">Une liste select</label>
              <select id="selection" class="form-control" name ="matiere">
                <option value="" name ="matiere">la metiere que vous enseigner?</option>

                  <?php foreach ($viewVars['vu_matiereList'] as $vu_matiere) : ?>
                    <option value="<?= $vu_matiere-> get_matiereM()?>"name ="matiere"><?= $vu_matiere-> get_matiereM()?></option>
                  <?php endforeach; ?>
                          
                <optgroup label="">

                </optgroup>
              </select>
            </div><br><br><br>







            <div class="bouton">
                <input type ="submit" class="btn btn-secondary" value="validation" name="submit">
            </div>
        </form>

        <?php } ?>

        </div>
    </div>
    </div>
        
    </body>
</html>