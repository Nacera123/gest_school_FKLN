

<!DOCTYPE html>
<!--Début du site-->
<html lang="fr">

<head>
  <title>College René Descartes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Feuille CSS -->
  <link rel="stylesheet" href="./css/parents.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

</head>


<body>

<!--Navbar-->


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="index3.php"> <button class="btn btn-outline-primary" type="submi>">Acceuil</button></a>
        <a href="register.php"> <button class="btn btn-outline-danger" type="submi>">Se déconnecter</button></a>
      
       <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
       session est automatiquement réinitilaiser.-->
       
      </div>
    </div>
  </div>


<div class="bienvenue">
  <h5><b>Bienvenue dans l'espace parents. Ici vous trouverez le detail de la scolarité de votre (vos) enfant(s)<b><h5>
</div> 


<div class= "corps">
    <div class ="gauche">

            <br><h5>Mes informations personnelles</h5><br><br>
                
                <?php foreach ($viewVars['familleList'] as $famille) : ?>                 
                    <li> NOM : <?= $famille-> getnomU()?></li>
                    <li> PRENOM : <?= $famille-> getprenomU()?></li>
                    <li> MOBILE : <?= $famille-> getmobileU()?></li>
                    <li> ADRESSE: <?=$famille-> getadresseU()?></li>
                    <li> CODE POSTAL: <?= $famille-> getcode_postalU()?></li>
    
                    <?php endforeach; ?>
                
    </div>

    <div class= "droite">
        
            <h3 class="card-header" id= "formation"><center>INFORMATIONS DE L'ELEVE</center> </h3>
                
                 <div class ="infos">
                <br><h5>Informations personnelles de l'élève</h5><br>
                <?php foreach ($viewVars['familleList'] as $famille) : ?> 
                        <li> NOM :<?= $famille-> getNomEnf()?> </li>
                        <li> PRENOM :<?= $famille-> getPrenomEnf()?></li>
                        <li> DATE NAISSANCE : <?= $famille-> getdnEnf()?></li>
                        <li> CURSUS:<?= $famille-> getidetudiantF()?> </li>
                  <?php endforeach; ?>
                </div>



        <div class ="formation">
        <br><h5>Bulletin de l'élève</h5><br>
                      <?php foreach ($viewVars['noteList'] as $note) : ?> 
                        <td><?= $note-> getmatiereN()?> </td>
                        <td><?= $note-> getidprofesseurN()?></td>
                        <td><?= $note-> getnoteN()?></td>
                        <td><?= $note-> getappreciationN()?></td>
                      <?php endforeach; ?>
                    
                    </div>
            <!-- <table>
                <thead>
                    <tr>
                        <th>Matières</th>
                        <th>Professeurs</th>
                        <th>Notes</th>
                        <th>Appréciations</th>
                    </tr>
                </thead>

                 <tbody>
                     <tr>
              
                     </tr>

                     <tr>
                        <td>Introduction à l'accessibilité</td>
                        <td>Introduction à l'accessibilité</td>
                        <td>Introduction à l'accessibilité</td>
                        <td>Introduction à l'accessibilité</td>
                     </tr>
                </tbody>

            </table> -->
        
    </div>

</div>


<div class="blank" >
            
    <a href =""><button id = "bouton" type="button" class="btn btn-primary">Suppression compte </button></a>
            
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






