
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
<!--Navbar-->


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="index1"> <button class="btn btn-outline-primary" type="submit>">Acceuil</button></a>
        <a href="connexion"> <button class="btn btn-outline-danger" type="submit>">Se déconnecter</button></a>
      
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
            <li> NOM : <?= $prof-> getnomP()?></li><br>
            <li> PRENOM : <?= $prof-> getprenomP()?></li><br>
            <li> MATIERE : <?= $prof-> getmatiereP()?></li><br>
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
    
    
    <!--                                           !!  C'EST LA FIN DU SITE !!                                                               -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  -->
</body>
</html>






