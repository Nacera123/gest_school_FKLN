
<!DOCTYPE html>
<!--Début du site-->
<html lang="fr">

<head>
  <title>College René Descartes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
<link rel="stylesheet" href="./css/style1.css">
</head>
<body>
<?php 
session_start();
require ("../database/db_data.php");
if(empty($_POST["email"]) || empty($_POST["mot_de_passe"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
			$connexion= new DBData (); 
			$reslt = $connexion->get_login();
		   }
            
    ?>

<form class="box" action="" method="post" name="login">
<h1>connexion client</h1>
<input type="text" class="box-input" name="email" placeholder="Email"/>
<input type="password" class=" box-input" name="mot_de_passe" placeholder="Mot de passe"/>
<input type="submit" value="Connexion " name="submit" class="box-button"/>
<p class="box-register">Vous n'avez pas encore un compte ?<a href="register.php">S'inscrire</a></p>
<?php if (!empty($message)) : ?>
    <p class="errorMessage"><?= $message; ?></p>
<?php endif; ?>
</form>





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



<!--C'est la fin du site !!-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</body>
</html>