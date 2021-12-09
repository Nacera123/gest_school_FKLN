



        <!--Navbar-->



        <div class="sticky-top">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="navbar">
                    <div>
                    <a href="acceuil"> <button class="btn btn-outline-primary" type="submi>">Revenir a la page d'Acceuil</button></a>
                    <div display= "none">
            
                
                </div>
            </div>
        </div> 


        <div class = "formulairec">
            <div class="formulaire1c"> <h1>CONNEXION</h1></div><br><br>
            <div class="container">



            <?php 
              if(empty($_POST["email"]) || empty($_POST["mot_de_passe"]))  
              {  
                    $message = '<label>All fields are required</label>';  
              }  
              else  
              {  
              $connexion= new DBData (); 
              $reslt = $connexion->login();
              }
            
            ?>

                
                <form method='POST'>
                    <div class="form-group" id ="divconn">
                        <label for="nom">Entrez votre Email</label>
                        <input type="text" class="form-control" id="nom" placeholder="@mail" name="email">
                    </div><br>
                    
                    <div class="form-group"id ="divconn">
                        <label for="email">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="email" placeholder="votre mot de passe" name="mot_de_passe">
                    </div><br><br>

                    <div class="bouton">
                        <input type ="submit" class="btn btn-secondary" value="Connexion">
                    </div>
                    <?php if (!empty($message)) : ?>
                        <p class="errorMessage"><?= $message; ?></p>
                    <?php endif; ?>

                                           
                  </form>
            </div>
        </div>

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


