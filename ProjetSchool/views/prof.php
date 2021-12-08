
<!DOCTYPE html>
<!--Début du site-->
<html lang="fr">

<head>
  <title>College René Descartes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Feuille CSS -->
 <link rel="stylesheet" href="./css/profs.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>


<body>


<div class="header">
        <div class="side">
            <a href="https://www.education.gouv.fr/"> <img src="./img/logo.png"> </a>
        </div>
        <div class="main"><center>
            <h5><b> Collège FKLN - 74 avenue JEAN Francois 75015 Paris - 01 55 66 41 77 </b></h5>
            <h2>ESPACE PROFESSEURS</h2>
        </center></div>
   
</div>


<!--Navbar-->


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="index1"> <button class="btn btn-outline-primary" type="submit>">Acceuil</button></a>
        <a href="connecxion"> <button class="btn btn-outline-danger" type="submit>">Se déconnecter</button></a>
      
       <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
       session est automatiquement réinitilaiser.-->
       
      </div>
    </div>
</div>


<div class="bienvenue">
  <h5><b>EVALUATION DES ELEVES<b><h5>
</div> 




    
<div class= "corps">

    <div class = "infperso">
        <br><h5>Mes informations personnelles</h5><br><br>
     
        <?php foreach ($viewVars['professeurList'] as $prof ) : ?>
            <li> NOM : <?= $prof-> getnomP()?></li>
            <li> PRENOM : <?= $prof-> getprenomP()?></li>
            <li> MATIERE : <?= $prof-> getmatiereP()?></li>
            <?php endforeach; ?>
          
    </div>


    <div class="inscription">
        <form>
            <div class="form-row">

                <div class="form-group ">
                <label for="inputEmail4">NOM DE L'ELEVE</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="">
                </div>

                <div class="form-group ">
                <label for="inputPassword4">PRENOM DE L'ELEVE</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
                </div>

                <div class="form-group ">
                <label for="inputPassword4">NUMERO DE L'ETUDIANT</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="">
                </div>

                <div class="form-group ">
                <label for="inputAddress">MATIERE</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>

                <div class="form-group ">
                <label for="inputAddress2">MOYENNE</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="">
                </div>

                <div class="form-group ">
                <label for="inputCity">APPRECIATION</label>
                <input type="text" size="50px" class="form-control" id="inputCity">
                </div>

            </div>

            <center><input type="submit" class="btn btn-primary" value="Soumettre" id="soumettre"></center>
        </form>

    </div>


</div>
<footer>
    <footer class="text-center text-lg-start bg-light text-muted">
    <HR>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid colonne 1 -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i> Collège FKLN
              </h6>
              <p>
              Le collège FKLN est un établissement privé sous contrat d'association avec l'État. Fondé en 1975, il s'efforce de fournier
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
              <p> Collège FKLN - 74 avenue Jean Francois Berger 75015 Paris </p>
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
    
    
    
    <!--                                           !!  C'EST LA FIN DU SITE !!                                                               -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  -->
</body>
</html>






