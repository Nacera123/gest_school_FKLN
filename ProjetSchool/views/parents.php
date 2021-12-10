

<!--Début du site-->
<html lang="fr">

<head>
  <title>PARENTS</title>
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
        <a href="acceuil"> <button class="btn btn-outline-primary" type="submi>">Acceuil</button></a>
        <a href="connexion"> <button class="btn btn-outline-danger" type="submi>">Se déconnecter</button></a>
      
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
                    <li> NOM : <?= $famille-> getnomU()?></li><br>
                    <li> PRENOM : <?= $famille-> getprenomU()?></li><br>
                    <li> MOBILE : <?= $famille-> getmobileU()?></li><br>
                    <li> ADRESSE: <?=$famille-> getadresseU()?></li><br>
                    <li> CODE POSTAL: <?= $famille-> getcode_postalU()?></li>
    
                    <?php endforeach; ?>
                
    </div>

    <div class= "droite">
        
            <h3 class="card-header" id= "formation"><center>INFORMATIONS DE L'ELEVE</center> </h3>
                
                 <div class ="infos">
                <br><h5>Informations personnelles de l'élève</h5><br>
                <?php foreach ($viewVars['familleList'] as $famille) : ?> 
                        <li> NOM :<?= $famille-> getNomEnf()?> </li><br>
                        <li> PRENOM :<?= $famille-> getPrenomEnf()?></li><br>
                        <li> DATE NAISSANCE : <?= $famille-> getdnEnf()?></li><br>
                        <li> CURSUS:<?= $famille-> getidetudiantF()?> </li><br>
                  <?php endforeach; ?>
                </div>



        <div class ="formation">
        <br><h3><u>Bulletin de l'élève</u></h3><br>
<!-- 
            <table>
                <thead>
                    <tr>
                        <th>Matières</th>
                        <th>Professeurs</th>
                        <th>Notes</th>
                        <th>Appréciations</th>
                    </tr>
                </thead>

                 <tbody>
                <?php foreach ($viewVars['noteList'] as $note) : ?>
                     <tr>
                        <td><?= $note-> getmatiereN()?> </td>
                        <td><?= $note-> getidprofesseurN()?></td>
                        <td><?= $note-> getnoteN()?></td>
                        <td><?= $note-> getappreciationN()?></td>
                      </tr>
                  <?php endforeach; ?>      
                </tbody>

            </table> -->
            <?php include 'bulenfant.php'?>

         </div>
    </div>

</div>


<div class="blank" >
            
    <a href =""><button id = "bouton" type="button" class="btn btn-primary">Suppression compte </button></a>
            
 </div>
    
    <!--                                           !!  C'EST LA FIN DU SITE !!                                                               -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  -->
</body>







