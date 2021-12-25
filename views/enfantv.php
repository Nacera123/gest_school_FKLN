
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
    // var_dump ($_GET['id']);   
  
                  

            if(!empty($_POST['nom']) ||!empty($_POST['prenom']) || !empty($_POST['date_naissance'])|| !empty($_POST['cursus'])|| !empty($_POST['id_cursus'])){

                $nom            =$_POST['nom'];
                $prenom         =$_POST['prenom'];
                $date_naissance =$_POST['date_naissance'];
                $cursus         =$_POST['cursus'];
                $id_cursus      =$_POST['id_cursus'];

                $database= new DBData (); 
                $data = [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'date_naissance' => $date_naissance,
                    'cursus' => $cursus,
                    'id_cursus'=> $id_cursus,
                    'id_utilisateur'=>  $_SESSION['id_utilisateur'],


                ];
        
                $res = $database->validationenfant($data);


                if($res){
                    echo "<div class='sucess'>
                            <h3>Vous êtes inscrit avec succès.</h3>
                            <h3>VOUS POUVEZ ACCEDER A VOTRE COMPTE EN CLIQUANT ICI </h3>
                            <p>Cliquez ici pour vous <a href='enfant'> authentifier</a></p>

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


            <div class="row mr-1">
              <div class="col">
                <input type="date" class="form-control" placeholder="Date de naissance" name ="date_naissance">
              </div>

            </div><br>


            <div class="form-group">
              <label for="selection">Votre Cursus</label>
              <select id="selection" class="form-control" name ="id_cursus">
                <option value="" name ="id_cursus">quel est votre Cursus?</option>

                  <?php foreach ($viewVars['cursusList'] as $cursus) : ?>
                    <option value="<?=$cursus->getid_cursusC()?><?=$cursus->getnom_cursusC()?>"name ="id_cursus"><?=$cursus->getid_cursusC()?>-<?=$cursus->getnom_cursusC()?></option>
                  <?php endforeach; ?>
                          
                <optgroup label="">

                </optgroup>
              </select>
            </div><br><br><br>

            <div class="form-group">
              <label for="selection">Confirmer votre cursus</label>
              <select id="selection" class="form-control" name ="cursus">
                <option value="" name ="cursus">Confirmer votre cursus</option>

                  <?php foreach ($viewVars['cursusList'] as $cursus) : ?>
                    <option value="<?=$cursus->getnom_cursusC()?>"name ="cursus"><?=$cursus->getnom_cursusC()?></option>
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
        
    </body>
</html>