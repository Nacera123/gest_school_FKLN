<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['matiere'])){
			echo "Please fillout all required fields"; 
		}else{		
			$nom            = $_POST['nom'];
			$prenom 	    = $_POST['prenom'];
            $matiere        = $_POST['matiere'];
            $id_professeur    = $_GET['id'];


			$sql = "UPDATE professeur SET nom='{$nom}', prenom= '{$prenom}', matiere= '{$matiere}'
					WHERE id_professeur=" . $_GET['id'];

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
	$sql = "SELECT * FROM professeur WHERE id_professeur={$id}";
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
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE PROFESSEUR</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id_professeur']; ?>" name="id_professeur">

				<label for="nom">NOM DU PROFESSEUR</label>
				<input type="text" id="nom"  name="nom" value="<?php echo $row['nom']; ?>" class="form-control"><br>
				
                <label for="prenom">PRENOM DU PROFESSEUR</label>
				<input type="text"  name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" class="form-control"><br>
				
                <label for="matiere">MATIERE</label>
				<input type="text"  name="matiere" id="matiere" value="<?php echo $row['matiere']; ?>" class="form-control"><br>

                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








