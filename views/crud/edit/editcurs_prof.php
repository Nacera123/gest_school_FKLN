<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['id_cursus']) || empty($_POST['id_professeur'])){
			echo "Please fillout all required fields"; 
		}else{		
			$id_cursus           = $_POST['id_cursus'];
			$id_professeur 	    = $_POST['id_professeur'];

            $id_cursus    = $_GET['id'];


			$sql = "UPDATE cursus_professeur SET id_cursus='{$id_cursus}', id_professeur= '{$id_professeur}'
					WHERE id_cursus=" . $_GET['id'];

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
	$sql = "SELECT * FROM cursus_professeur WHERE id_cursus={$id}";
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
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE CURSUS / PROFESSEUR</h3> 
			<form action="" method="POST">

				<label for="id_cursus"> ID REF-CURSUS</label>
				<input type="number" id="id_cursus"  name="id_cursus" value="<?php echo $row['id_cursus']; ?>" class="form-control"><br>
				
                <label for="id_professeur">ID REF-PROFESSEUR</label>
				<input type="number"  name="id_professeur" id="id_professeur" value="<?php echo $row['id_professeur']; ?>" class="form-control"><br>
				
                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








