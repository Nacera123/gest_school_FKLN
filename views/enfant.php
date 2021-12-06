<?php

require '../class/ClassEnfant.php';


?>


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
  

</head>


<body>


<div class="header">
    <h2>ESPACE ELEVE</h2>
</div>


<!--Navbar-->


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="index3(bis).html"> <button class="btn btn-outline-primary" type="submi>">Acceuil</button></a>
        <a href=""> <button class="btn btn-outline-primary" type="submi>">Cursus</button></a>
        <a href=""> <button class="btn btn-outline-danger" type="submi>">Se déconnecter</button></a>
      
       <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
       session est automatiquement réinitilaiser.-->
       
      </div>
    </div>
  </div>


<div class="bienvenue">
  <h5><b>Bievenue dans ton espace personnel. Ici tu trouvera le detail de tes bulletins scolaires<b><h5>
</div>








        <div >
            <div class= "corps">
                <div class = "infperso">
                    <br><h5>Mes informations personnelles</h5><br><br>
                    <tr>

                        <li> NOM : <?php echo $EnfantList-> get_Nom()?></li>
                        <li> PRENOM : <?php echo $EnfantList-> get_Prenom()?></li>
                        <li> DATE DE NAISSANCE : <?php echo $EnfantList-> get_date()?></li>
                        <li> NUMERO ETUDIANT : <?php echo $EnfantList-> get_Numero()?></li>

                    </tr>
                    
                    
                </div>


                <div class ="bulletin">
                    <table class ="table">
                        <thead>
                            <tr>
                                <td></td>
                                <td>MOYENNE</td>
                                <td>APPRECIETION</td>
                            </tr>

                        </thead>

                        <tbody>
                            <?php foreach ($NoteList as $note) :?>
                            <tr>
                                <td><?= $note-> get_note()?></td>
                                <td><?= $note->  get_appreciation()?></td>
                                <td><?= $note-> matiere?></td>

                            </tr>
                            <?php endforeach?>





                        </tbody>
                    </table>




                </div>


            </div>
        


            <!--footer-->

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
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
        </div>
       
    </body>
</html>





<style>


    /*                       Header                                 */


.header {
    padding: 80px;
    text-align: center;
    background: #2C74FF;
    color: white;
  }

  .header h2 {
    font-size: 50px;
  }


/*                                 bienvenue                               */

.bienvenue{
  padding: 50px;
  text-align:center;
}




/*                                                                       */
    .infperso{

    height: 300px; width: 300px;
    background-color: rgb(151, 148, 148);
    margin-top: 20px;
    margin-left: 10px;


    }
    .corps{
        height: 1500px;
        display:-ms-flexbox; 
        display: flex;
        flex:100%;


    }

.gauche{

    flex-wrap: 80%;
    flex: 80%;
    background-color: rgb(221, 218, 231);
    height: 1500px;


}

.droite{
    flex-wrap: 25%;
    flex: 25%;
    background-color: rgb(114, 114, 119);
    height: 1500px;

}

#bouton{
        /* background-color: black; */
        width: 200px; height: 80px;
        /* margin-top: 50px; */
        margin-left: 800px;

}


</style>