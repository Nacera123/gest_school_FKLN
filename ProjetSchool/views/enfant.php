
<!--Début du site-->
<html lang="fr">

<head>
  <title>ELEVES</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Feuille CSS -->
<link rel="stylesheet" href="./css/enfant.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

</head>


<body>


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">Acceuil</button></a>
        <a href="connexion"> <button class="btn btn-outline-danger" type="submit>">Se déconnecter</button></a>
      
       <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
       session est automatiquement réinitilaiser.-->
       
      </div>
    </div>
  </div>


<div class="bienvenue">
  <h5><b>Bienvenue dans ton espace personnel. Ici tu trouvera le detail de tes bulletins scolaires<b><h5>
</div>


<div class= "corps">

        <div class = "infperso">
            <br><h5>Mes informations personnelles</h5><br><br>
        
            <?php foreach ($viewVars['etudiantList'] as $etudiant) : ?>
                <li> NOM : <?= $etudiant-> getnomE()?></li><br>
                <li> PRENOM : <?= $etudiant-> getprenomE()?></li><br>
                <li> DATE DE NAISSANCE : <?= $etudiant-> getdate_naissanceE()?></li><br>
                <li> CURSUS : <?= $etudiant-> getid_cursusE()?></li><br>
                <?php endforeach; ?>
        
        </div>


        <div class ="droite">
            <div class="bulletin">

                <table class ="table">
                <thead>
                    <tr>
                        <th>Matières</th>
                        <th>Professeurs</th>
                        <th>Notes</th>
                        <th>Appréciations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($viewVars['noteList'] as $note) :?>
                     <tr> 
                        <td><?= $note->getmatiereN()?></td>
                        <td><?= $note->getidprofesseurN()?></td>
                        <td><?= $note->getnoteN()?></td>
                        <td><?= $note->getappreciationN()?></td>
                    </tr>
                    <?php endforeach?>

                </tbody>
             </table>

            </div>
        </div>

</div>
        
    <!--                                           !!  C'EST LA FIN DU SITE !!                                                               -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  -->
</body>
