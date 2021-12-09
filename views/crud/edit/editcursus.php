
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['nom_cursus']) || empty($_POST['frais_cursus']))
		{
			echo "Please fillout all required fields"; 
		}else{		
			$nom_cursus    = $_POST['nom_cursus'];
			$frais_cursus 	= $_POST['frais_cursus'];
            $id_cursus      = $_GET['id'];

			$sql = "UPDATE cursus SET nom_cursus='{$nom_cursus}', frais_cursus = '{$frais_cursus}'
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
	$sql = "SELECT * FROM cursus WHERE id_cursus={$id}";
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
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE CURSUS</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id_cursus']; ?>" name="id_cursus">

				<label for="nom_cursus">nom_cursus</label>
				<input type="text" id="nom_cursus"  name="nom_cursus" value="<?php echo $row['nom_cursus']; ?>" class="form-control"><br>
				
                <label for="frais_cursus">frais_cursus</label>
				<input type="text"  name="frais_cursus" id="frais_cursus" value="<?php echo $row['frais_cursus']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








