
<body>



<!--Navbar-->


<div class="sticky-top">
    <div class="shadow p-3 mb-5 bg-body rounded">
      <div class="navbar">
        <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">Acceuil</button></a>
        <a href="acceuil"> <button class="btn btn-outline-danger" type="submit>">Se déconnecter</button></a>
      
       <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
       session est automatiquement réinitilaiser.-->
       
      </div>
    </div>
</div>
<?php
    var_dump ($_SESSION['id_utilisateur']);  
    ?>

<div class="bienvenue">
  <?php foreach ($viewVars['etudiantList'] as $etudiant) :?>
      <h2> BIENVENUE <?= $etudiant-> getnomE() ?> / <?= $etudiant-> getprenomE()?> DANS TON ESPACE PERSONNEL</h2>
    <?php endforeach?>
  <!-- <h5><b>EVALUATION DES ELEVES<b><h5> -->
</div> 
   
<div class = "infperso1">

    <br><h5>Mes informations personnelles</h5><br><br>
    <?php foreach ($viewVars['etudiantList'] as $etudiant) : ?>
      <li> NOM : <?= $etudiant-> getnomE()?></li>
      <li> PRENOM : <?= $etudiant-> getprenomE()?></li>
      <li> DATE DE NAISSANCE : <?= $etudiant-> getdate_naissanceE()?></li>
      <li> id_etudiant : <?= $etudiant-> getid_cursusE()?></li>
    <?php endforeach;?>        
</div>
<div id="a">
    <div id="b">
      <div id="e"><h1>matiere</h1></div><hr>

      <?php foreach ($viewVars['matiereList'] as $matiere) : ?>
        <br><div id="e"><h3><?= $matiere-> get_matiereM()?></h3></div>
      <?php endforeach; ?>

    </div>

    <div id="c">
      <div id="e"><h2>moyenne</h2></div><hr>

      <?php foreach ($viewVars['noteList'] as $note) : ?>
        <br><div id="e"><h3><?= $note-> getnoteN()?> </h3></div>
      <?php endforeach; ?>

    </div>

    <div id="d">
      <div id="e"><h2>appreciation</h2></div><hr>
      <?php foreach ($viewVars['noteList'] as $note) : ?>
        <br><div id="e"><h3><?= $note-> getappreciationN()?></h3></div>
      <?php endforeach; ?>

    </div>

  </div>





</body>
</html>






<style>








.bienvenue{
  padding: 50px;
  text-align:center;
}
        
    
.infperso1 {
    width: 300px;
    background-color:#dce7f5;
    margin-left: 10px;
    flex-wrap: 25%;
    flex: 25%;
    height: 300px;
        
    }

    #a{
    margin-top:150px;
    height: 1000px; width: 900px;
    margin-left: auto;
    margin-right: auto;
    background-color:#dce7f5;

    display: -ms-flexbox;
    display:flex;
    flex:100%;
}

#b{
    height: 600px;
    flex:30%;
    background-color:#dce7f5;

}

#c{
    height: 600px;
    flex:30%;
    background-color:#dce7f5;

}

#d{
    height: 600px;
    flex:30%;
    background-color:#dce7f5;

}

#e{
    background-color:#dce7f5;
    height: 100px; width: 270px;
    text-align: center;


}

</style>