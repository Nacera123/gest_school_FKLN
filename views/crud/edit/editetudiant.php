<?php 
session_start();
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['date_naissance'])
        || empty($_POST['cursus'])|| empty($_POST['id_cursus'])){
			echo "Please fillout all required fields"; 
		}else{		
			$nom            = $_POST['nom'];
			$prenom 	    = $_POST['prenom'];
            $date_naissance = $_POST['date_naissance'];
			$cursus 	    = $_POST['cursus'];
            $id_cursus 	    = $_POST['id_cursus'];
            $id_etudiant    = $_GET['id'];

			$sql = "UPDATE etudiant SET nom='{$nom}', prenom= '{$prenom}', date_naissance= '{$date_naissance}',
                                    cursus='{$cursus}', id_cursus= '{$id_cursus}'
					WHERE id_etudiant=" . $_GET['id'];

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
	$sql = "SELECT * FROM etudiant WHERE id_etudiant={$id}";
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
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY TABLE ETUDIANT</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['id_etudiant']; ?>" name="id_etudiant">

				<label for="nom">NOM DE L'ETUDIANT</label>
				<input type="text" id="nom"  name="nom" value="<?php echo $row['nom']; ?>" class="form-control"><br>
				
                <label for="prenom">PRENOM DE L'ETUDIANT</label>
				<input type="text"  name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" class="form-control"><br>
				
                <label for="date_naissance">DATE DE NAISSANCE DE L'ETUDIANT</label>
				<input type="date"  name="date_naissance" id="date_naissance" value="<?php echo $row['date_naissance']; ?>" class="form-control"><br>

                <label for="cursus">CURSUS DE L'ETUDIANT</label>
				<input type="text"  name="cursus" id="cursus" value="<?php echo $row['cursus']; ?>" class="form-control"><br>
                
                <label for="id_cursus">ID_CURSUS</label>
				<input type="number"  name="id_cursus" id="id_cursus" value="<?php echo $row['id_cursus']; ?>" class="form-control"><br>

                <br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>








