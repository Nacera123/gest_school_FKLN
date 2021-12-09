<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['email'])
        || empty($_POST['mot_de_passe'])|| empty($_POST['mobile'])|| empty($_POST['adresse'])
        || empty($_POST['code_postal'])|| empty($_POST['fonction'])){
			echo "Please fillout all required fields"; 
		}else{		
			$nom            = $_POST['nom'];
			$prenom 	    = $_POST['prenom'];
            $email          = $_POST['email'];
            $mot_de_passe   = $_POST['mot_de_passe'];
			$mobile 	    = $_POST['mobile'];
            $adresse        = $_POST['adresse'];
            $code_postal 	= $_POST['code_postal'];
            $fonction       = $_POST['fonction'];


            $id_utilisateur    = $_GET['id'];


			$sql = "UPDATE utilisateur SET nom='{$nom}', prenom= '{$prenom}', email= '{$email}',
                                          mot_de_passe='{$mot_de_passe}', mobile= '{$mobile}', adresse= '{$adresse}',
                                          code_postal='{$code_postal}', fonction= '{$fonction}
					WHERE id_utilisateur=" . $_GET['id'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	// recuperation du id passer en parametre 
	
	//$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	
	/* 1- Récupértion du paramètre transmis */
	$id= $_GET['id'];
	 
	 //echo $id ;
	/*2- Selectionner en base les infos à montrer a l'utilisateur*/ 
	$sql = "SELECT * FROM utilisateur WHERE id_utilisateur={$id}";
	$result = $con->query($sql); /*3- exécution de la requete retour d'un tableau*/ 

	if($result->num_rows < 1){
		header('Location: index.php'); /* retourner à la page daccueil*/
		exit;
	}
	$row = $result->fetch_assoc(); /*pas besoin de while une seule ligne retr*/ 
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE UTILISATEUR</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id_utilisateur']; ?>" name="id_utilisateur">

				<label for="nom">NOM USER</label>
				<input type="text" id="nom"  name="nom" value="<?php echo $row['nom']; ?>" class="form-control"><br>
				
                <label for="prenom">PRENOM USER</label>
				<input type="text"  name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" class="form-control"><br>
				
                <label for="email">@ EMAIL USER</label>
				<input type="text"  name="email" id="email" value="<?php echo $row['email']; ?>" class="form-control"><br>

                <label for="mot_de_passe">MOT DE PASSE USER</label>
				<input type="text"  name="mot_de_passe" id="mot_de_passe" value="<?php echo $row['mot_de_passe']; ?>" class="form-control"><br>

                <label for="mobile">TELEPHONE USER</label>
				<input type="text"  name="mobile" id="mobile" value="<?php echo $row['mobile']; ?>" class="form-control"><br>

                <label for="adresse">ADRESSE USER</label>
				<input type="text"  name="adresse" id="adresse" value="<?php echo $row['adresse']; ?>" class="form-control"><br>

                <label for="code_postal">CODE POSTAL USER</label>
				<input type="number"  name="code_postal" id="code_postal" value="<?php echo $row['code_postal']; ?>" class="form-control"><br>

                <label for="fonction">FONCTION USER</label>
				<input type="text"  name="fonction" id="fonction" value="<?php echo $row['fonction']; ?>" class="form-control"><br>

                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








