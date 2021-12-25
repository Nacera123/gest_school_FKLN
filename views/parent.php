
        <link href="../css/style.css" rel="stylesheet" >




 
  

  <body>


    <?php 
      var_dump($_SESSION['id_utilisateur']);
      echo"<br>";

      ?>

  <!--Navbar-->



  <div class="sticky-top">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="navbar">
          <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">Acceuil</button></a>
          <a ><button type ="button" class="btn btn-outline-primary" id="tchat"onclick= "cache();">voir les resultats de mon enfant</button></a>
          <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">supprimer le compte enfant</button></a>


          <a href="acceuil"> <button class="btn btn-outline-danger" type="submit>">Se déconnecter</button></a>
        
          <!--Boutton de deconnexion-si il ya la possibilité de le faire. Sinon quand le parent quitte cette page la 
          session est automatiquement réinitilaiser.-->
        
        </div>
      </div>
  </div>

  <?php foreach ($viewVars['parentList'] as $parent) : ?>
    <div class="bienvenue">
      <h5><b>Bievenue dans l'espace parents Mme /Mr : - <?= $parent-> getnomU()?>  <?= $parent-> getprenomU()?> - <br>
        Ici vous trouverez le detail de la scolarité de votre (vos) enfant(s) :<?= $parent-> getNomEnf()?> / <?= $parent-> getPrenomEnf()?><b><h5>
    </div>
  
  <?php endforeach; ?>        





  <div class = "infperso1">
      <br><h5>Mes informations personnelles</h5>
    
      <?php foreach ($viewVars['parentList'] as $parent) : ?>

        <li> NOM : <?= $parent-> getnomU()?></li>
        <li> PRENOM : <?= $parent-> getprenomU()?></li>
        <li> MOBILE : <?= $parent-> getmobileU()?></li>
        <li> NOM PRENOM ENFANT : <?= $parent-> getNomEnf()?> / <?= $parent-> getPrenomEnf()?></li>
        <li> id_etudiant : <?= $parent-> getidetudiantF()?></li>

      <?php endforeach; ?>        
  </div>

<div id = "enfant" style ="display:none;"  id="enfant">
  <div class="vuenfant" >
    <div class = "toto">
      <div class = "infpersoenfant">
        <br><h5>Mes informations personnelles</h5>
      
        <?php foreach ($viewVars['utilisateurList1'] as $etudiant) : ?>
          <li> NOM : <?= $etudiant-> getnomE()?></li>
          <li> PRENOM : <?= $etudiant-> getprenomE()?></li>
          <li> date de naissance : <?= $etudiant->getdate_naissanceE()?></li>
          <li> id_etudiant : <?= $etudiant-> getid_etudiantE()?></li>
  
        <?php endforeach; ?>        
      </div>
  
    </div>
    <div class="vide"></div>

    <div id="a">

      <div id="b">
        <div id="e"><h1>matiere</h1></div><hr>

        <?php foreach ($viewVars['matiereList1'] as $parent) : ?>
          <br><div id="e"><h3><?= $parent->get_matiereM()?></h3></div>
        <?php endforeach; ?>

      </div>

      <div id="c">
        <div id="e"><h1>moyenne</h1></div><hr>

        <?php foreach ($viewVars['noteList1'] as $parent) :  ?>
          <br><div id="e"><h3><?= $parent-> getnoteN()?> </h3></div>
        <?php endforeach; ?>

      </div>

      <div id="d">
        <div id="e"><h1>appreciation</h1></div><hr>
        <?php foreach ($viewVars['noteList1'] as $parent) :  ?>
          <br><div id="e"><h3><?= $parent-> getappreciationN()?></h3></div>
        <?php endforeach; ?>

      </div>

    </div>
  </div>

</div>


</body>
</html>

<style>
  .bienvenue{
    padding: 30px;
    text-align:center;
    background-color:#aac6eb;
    width:600px;
    margin-left: auto;
    margin-right: auto;
    height:120px;
    border-radius: 10%;
    border: solid 1px rgb(103, 103, 117);
  }
.infperso1 {
  width: 300px;
  background-color:#9bbeec;
  margin-left: 50px;
  height: 300px;
        
}
#enfant{
}
.vuenfant{
  padding: 30px;
  margin-top:120px;

  display: -ms-flexbox;
  display:flex;
  flex:100%;

}
.toto{

  flex:20%;
  /* background-color: blue; */
}

.infpersoenfant{
  width: 310px;
  background-color:#dce7f5;
  height: 300px;

}
.vide{
  flex:5%;

}

#a{
    /* height: 600px;  */
    background-color:#dce7f5;
    flex:70%;

     display: -ms-flexbox;
    display:flex;
    flex:100%; 
}

#b{
    /* height: 600px; */
    flex:30%;
    background-color:#dce7f5;

}

#c{
    /* height: 600px; */
    flex:30%;
    background-color:#dce7f5;

}

#d{
    /* height: 600px; */
    flex:30%;
    background-color:#dce7f5;

}

#e{
    background-color:#dce7f5;
    height: 100px;
     width: 270px;
    text-align: center;


}

</style>
<script>

  function cache() {
      var didi = document.getElementById("enfant");
      
      if (didi.style.display === "none")
      { 
          didi.style.display = "block";
      } 
      else {
        div.style.display = "none";
      }
  }


</script>





