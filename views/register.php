


    <!--Navbar-->



    <div class="sticky-top">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="navbar">
          <div>
          <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">Revenir a la page d'Acceuil</button></a>
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



    <!-- footer -->
      <footer class="sticky">
          <footer class="text-center text-lg-start bg-light text-muted">
          
          <HR>
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid colonne 1 -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i> Collège René Descartes
                    </h6>
                    <p>
                    Le collège René Descartes est un établissement privé sous contrat d'association avec l'État. Fondé en 1975, il s'efforce de fournier
                    un enseignement de qualité ainsi que d'innovation.
                    </p>
                  </div>
                  <!--fin Grid colonne 1 -->
          
                  <!-- Grid colonne 2 -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Liens -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Liens utiles
                    </h6>
                    <p>
                      <a href="https://www.ac-paris.fr/portail/jcms/j_6/accueil" class="text-reset">Academie de Paris</a>
                    </p>
                    <p>
                      <a href="https://www.education.gouv.fr/" class="text-reset">Ministère de l'education</a>
                    </p>
                    <p>
                      <a href="https://eduscol.education.fr/" class="text-reset">Eduscol</a>
                    </p>
                    <p>
                      <a href="https://www.sports.gouv.fr/" class="text-reset">Sports.gouv.fr</a>
                    </p>
                  </div>
                  <!-- Grid colonne 2-->
          
          
          
          
                  <!-- Grid colonne 3-->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Liens -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Contacts
                    </h6>
                    <p> Collège René Descartes - 74 avenue Gilbert Berger 75015 Paris </p>
                    <p> CollegeRD@gmail.com </p>
                    <p> 01 48 44 41 01</p>
          
                  </div>
                  <!-- Grid colonne 3 -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
          
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2021 Copyright:GestSchool
            </div>
          
          </footer>
          </footer>
      
  </body>






</html>


