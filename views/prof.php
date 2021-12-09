

 <link rel="stylesheet" href="./css/profs.css">




<body>




<body>



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




    
<div class= "corpss">

    <div class = "infperso1">
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
</body>
</html>