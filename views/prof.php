<link rel="stylesheet" href="./css/profs.css">




<body>




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


<div class="bienvenue">
  <h5><b>EVALUATION DES ELEVES<b><h5>
</div> 




    
<!-- <div class= "corps"> -->
    <?php
    var_dump ($_SESSION['id_utilisateur']);  
    ?>
 

    <div class = "infperso1">
        <br><h5>Mes informations personnelles</h5><br><br>
     
        <?php foreach ($viewVars['professeurList'] as $prof ) : ?>
            <li> NOM : <?= $prof-> getnomP()?></li>
            <li> PRENOM : <?= $prof-> getprenomP()?></li>
            <li> MATIERE : <?= $prof-> getmatiereP()?></li>
            <li> Id_PROFESSEUR : <?= $prof-> getid_professeurP()?></li>

        <?php endforeach; ?>
          
    </div>





    <div class="abcd">

        <?php
        
            if (!empty($_POST['id_matiere']) ||  !empty($_POST['note']) || !empty($_POST['appreciation']) 
            || !empty($_POST['id_etudiant']) || !empty($_POST['id_professeur']) || !empty($_POST['id_cursus'])){

                $id_matiere = $_POST['id_matiere'];
                $note = $_POST['note'];
                $appreciation = $_POST['appreciation'];
                $id_etudiant = $_POST['id_etudiant'];
                $id_professeur = $_POST['id_professeur'];
                $id_cursus = $_POST['id_cursus'];


                

                $database= new DBData ();
                $data = [

                    'id_matiere' => $id_matiere,
                    'note' => $note,
                    'appreciation' => $appreciation,
                    'id_etudiant' => $id_etudiant,
                    'id_professeur' => $id_professeur,
                    'id_cursus' => $id_cursus,

                ];

                $res = $database->insert_note($data);
                if($res){
                    echo 
                    "<div class='sucess'>
                    <h3>La moyenne est bien ajoutée.</h3>
                    </div>";
                }


            }else{
        
        
        
        
        
        ?>


        <form method='POST'>
            <div class="efg">
            
                <div class="form-group">
                    <label for="selection"> MATIERE</label>
                    <select id="selection" class="form-control" name ="id_matiere">
                        <option value="" name ="id_matiere">MATIERE</option>

                        <?php foreach ($viewVars['matiereList1'] as $matiere1) :  ?>
                            <option value="<?=$matiere1->getid_matiereM()?> "name ="id_matiere" ><?=$matiere1->getid_matiereM()?> <?=$matiere1->get_matiereM()?></option>
                        <?php endforeach; ?>
                                
                        <optgroup label="">

                        </optgroup>
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="selection"> id_etudiant</label>
                    <select id="selection" class="form-control" name ="id_etudiant">
                        <option value="" name ="id_etudiant">l'id de vos etudiants </option>

                        <?php foreach ($viewVars['etudiantprofList'] as $matiere1) :  ?>
                            <option value="<?=$matiere1->getid_etudiantE()?> "name ="id_etudiant" ><?=$matiere1->getid_etudiantE()?></option>
                        <?php endforeach; ?>
                                
                        <optgroup label="">

                        </optgroup>
                    </select>
                </div>

                <div class="form-group ">
                <label for="inputPassword4">note</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="" name="note">
                </div>

                <div class="form-group ">
                <label for="inputPassword4">appreciation</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="" name="appreciation">
                </div>

                <div class="form-group ">
                <label for="inputAddress2">id_professeur</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder=""name="id_professeur" >
                </div>

                <div class="form-group">
                    <label for="selection"> cursus</label>
                    <select id="selection" class="form-control" name ="id_cursus">
                        <option value="" name ="id_cursus">CURSUS</option>

                        <?php foreach ($viewVars['cursusList'] as $cursus) : ?>
                            <option value="<?=$cursus->getid_cursusC()?>"name ="id_cursus"><?=$cursus->getid_cursusC()?>-<?=$cursus->getnom_cursusC()?></option>
                        <?php endforeach; ?>
                                
                        <optgroup label="">

                        </optgroup>
                    </select>
                </div><br><br><br>

            </div> <br><br>

            <center><input type="submit" class="btn btn-primary" value="Soumettre" id="soumettre" name="add"></center>
        </form>

        <?php } ?>


    </div>


</div>



</body>
</html>

<style>

.abcd{

flex-wrap: 80%;
flex: 80%;
background-color: white;
height: 1500px;
}

.efg{
  height: 1000px;
  width: 600px;
  margin-left: 250px;
  margin-top:30px;
  border: 3px black solid;
  background-color:#dce7f5;
}
</style>