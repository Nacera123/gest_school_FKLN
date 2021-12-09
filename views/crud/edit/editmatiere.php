<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['matiere']) || empty($_POST['id_cursus'])){
			echo "Please fillout all required fields"; 
		}else{		
			$matiere            = $_POST['matiere'];
            $id_cursus 	        = $_POST['id_cursus'];

            $id_matiere            = $_GET['id'];


			$sql = "UPDATE matiere SET matiere='{$matiere}', id_cursus= '{$id_cursus}'

					WHERE id_matiere =" . $_GET['id'];

            // var_dump($sql); exit;

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
	$sql = "SELECT * FROM matiere WHERE id_matiere={$id}";
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
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE NOTE</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id_matiere']; ?>" name="id_matiere">

				<label for="matiere">MATIERE</label>
				<input type="text" id="matiere"  name="matiere" value="<?php echo $row['matiere']; ?>" class="form-control"><br>
				                
                <label for="id_cursus">ID REF CURSUS</label>
				<input type="number"  name="id_cursus" id="id_cursus" value="<?php echo $row['id_cursus']; ?>" class="form-control"><br>

                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








