<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['matiere']) || empty($_POST['note'])|| empty($_POST['appreciation'])
        || empty($_POST['id_etudiant'])|| empty($_POST['id_professeur'])|| empty($_POST['id_cursus'])){
			echo "Please fillout all required fields"; 
		}else{		
			$matiere            = $_POST['matiere'];
			$note 	            = $_POST['note'];
            $appreciation       = $_POST['appreciation'];
            $id_etudiant        = $_POST['id_etudiant'];
			$id_professeur 	    = $_POST['id_professeur'];
            $id_cursus 	        = $_POST['id_cursus'];
            $id_note            = $_GET['id'];


			$sql = "UPDATE note SET matiere='{$matiere}', note= '{$note}', appreciation= '{$appreciation}',
                                    id_etudiant='{$id_etudiant}', id_professeur= '{$id_professeur}', id_cursus= '{$id_cursus}'
					WHERE id_note=" . $_GET['id'];

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
	$sql = "SELECT * FROM note WHERE id_note={$id}";
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
				<input type="hidden" value="<?php echo $row['id_note']; ?>" name="id_note">

				<label for="matiere">MATIERE</label>
				<input type="text" id="matiere"  name="matiere" value="<?php echo $row['matiere']; ?>" class="form-control"><br>
				
                <label for="note">NOTE</label>
				<input type="number"  name="note" id="note" value="<?php echo $row['note']; ?>" class="form-control"><br>
				
                <label for="appreciation">APPRECIATION</label>
				<input type="text"  name="appreciation" id="appreciation" value="<?php echo $row['appreciation']; ?>" class="form-control"><br>

                <label for="id_etudiant">ID REF ETUDIANT</label>
				<input type="number"  name="id_etudiant" id="id_etudiant" value="<?php echo $row['id_etudiant']; ?>" class="form-control"><br>
                
                <label for="id_professeur">ID REF PROFESSEUR</label>
				<input type="number"  name="id_professeur" id="id_professeur" value="<?php echo $row['id_professeur']; ?>" class="form-control"><br>
                
                <label for="id_cursus">ID REF CURSUS</label>
				<input type="number"  name="id_cursus" id="id_cursus" value="<?php echo $row['id_cursus']; ?>" class="form-control"><br>

                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








