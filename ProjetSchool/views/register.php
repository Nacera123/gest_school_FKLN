<div class="sticky-top">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="navbar">
          <div>
          <a href="acceuil"> <button class="btn btn-outline-primary" type="submi>">Revenir a la page d'Acceuil</button></a>
          <div display= "none">
    
        
        </div>
      </div>
    </div> 



    <!-- formulaire -->



    <div class = "formulaire">
      <div class="formulaire1"> <h1>Formulaires d'Inscription</h1></div><br><br>
        <div class="container">


        <?php

          if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['mot_de_passe'], $_REQUEST['mobile'], $_REQUEST['adresse'], $_REQUEST['code_postal'], $_REQUEST['fonction']))
          {
            // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
            $nom = stripslashes($_REQUEST['nom']);
            // $nom_professeur = mysqli_real_escape_string($conn, $nom_professeur); 
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $prenom = stripslashes($_REQUEST['prenom']);
            // $prenom_professeur = mysqli_real_escape_string($conn, $prenom_professeur);
                // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $email = stripslashes($_REQUEST['email']);
            // $email = mysqli_real_escape_string($conn, $email);
            // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
            $password = stripslashes($_REQUEST['mot_de_passe']);
            // $password = mysqli_real_escape_string($conn, $password);
                // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $mobile = stripslashes($_REQUEST['mobile']);
            // $mobile = mysqli_real_escape_string($conn, $mobile);
                // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $adresse = stripslashes($_REQUEST['adresse']);
            // $adresse = mysqli_real_escape_string($conn, $adresse);
                // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
            $codepostal = stripslashes($_REQUEST['code_postal']);
            // $codepostal = mysqli_real_escape_string($conn, $codepostal);
            $fonction = stripslashes($_REQUEST['fonction']);
            
            // $query = "INSERT into `utilisateur` (nom, prenom, email, mot_de_passe, mobile, adresse, code_postal)
            // 			VALUES ('$nom', '$prenom', '$email','".hash('sha256', $password)."', '$mobile', '$adresse', '$codepostal')";
            // $res = mysqli_query($conn, $query);

          
            $database= new DBData (); 
            $data = [
              'nom' => $nom,
              'prenom' => $prenom,
              'email' => $email,
              'mot_de_passe' => $password,
              'mobile' => $mobile,
              'adresse' => $adresse,
              'code_postal' => $codepostal,
              'fonction'=>$fonction,
          ];

          $res = $database->insert_user($data);

              ///-( success case user added )
              if($res)
              {
                echo "<div class='sucess'>
                      <h3>Vous êtes inscrit avec succès.</h3>
                      <p>Cliquez ici pour vous <a href='connexion'> se connecter</a></p>
                </div>";
              }
          }
          else
          {
          ?>


                
          <form>
            <div class="row mr-1">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" name ="nom">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Prénom" name ="prenom">
              </div>
            </div><br>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="email" id="debut-email" name ="email">
              <div class="input-group-append"><span class="input-group-text" aria-label="fin de mail">@fkln.com</span></div>

            </div><br>

            <div class="row mr-1">
              <div class="col">
                <input type="password" class="form-control" placeholder="Mot de passe" name ="mot_de_passe">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Numéro de Téléphone" name ="mobile">
              </div>
            </div><br>

            <div class="row mr-1">
              <div class="col">
                <input type="text" class="form-control" placeholder="Adresse" name ="adresse">
              </div>
              <div class="col">
                <input type="number" class="form-control" placeholder="Code Postal" name ="code_postal">
              </div>
            </div><br>

            <div class="form-group">
              <label for="selection">Une liste select</label>
              <select id="selection" class="form-control" name ="fonction">
                <option value="" name ="fonction">Votre Fonction</option>
                <optgroup label="Etes-vous?">
                  <option value="etudiant" name ="fonction">Etudiant</option>
                  <option value="professeur"name ="fonction">Professeur</option>
                  <option value="parent"name ="fonction">Parent d'eleve</option>
                </optgroup>
              </select>
            </div><br><br><br>

            <div class="bouton">
                <input type ="submit" class="btn btn-secondary" value="Inscription" name="submit">
            </div>
          </form>

          <?php } ?>

        </div>
    </div>
