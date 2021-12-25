<?php
var_dump ($_SESSION['id_utilisateur']);   
?>






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
              $reslt = $connexion->login2();
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

    </body>






</html>


