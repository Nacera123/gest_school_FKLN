<?php 

require_once 'connect.php';
// require_once 'header.php';

?>
<div class="container">
	<?php 

		
    	if(isset($_POST['update1'])){

			if( empty($_POST['nom']) && empty($_POST['prenom'])&& empty($_POST['date_naissance']) 
			&& empty($_POST['cursus'])&& empty($_POST['id_cursus'])){

				echo "Please fillout all required fields"; 
			}else{	
				$nom 				= $_POST['nom'];
				$prenom 			= $_POST['prenom'];
				$date_naissance		= $_POST['date_naissance'];
				$cursus				= $_POST['cursus'];
				$id_cursus			= $_POST['id_cursus'];


				$sql1 = "UPDATE etudiant 
						SET nom='{$nom}', prenom='{$prenom}', date_naissance='{$date_naissance}', cursus='{$cursus}'  
							WHERE id_etudiant=" . $_POST['id_etudiant'];

				if( $con->query($sql1) === TRUE){
					echo "<div class='alert alert-success'>Successfully updated  cursus</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
				}
			}
		}


		$id= $_GET['id'];

		$sql1 = "SELECT * FROM etudiant WHERE id_etudiant={$id}";
		$result1 = $con->query($sql1);  

		if($result1->num_rows1 < 1){
			header('Location: index.php'); 
			exit;
		}
		$row1 = $result1->fetch_assoc();








	?>



	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table ETUDIANT</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php echo $row['id_etudiant']; ?>" name="id_etudiant">

					<label for="nom">NOM DE L'ETUDIANT</label>
					<input type="text" id="nom"  name="nom" value="<?php echo $row['nom']; ?>" class="form-control"><br>

					<label for="prenom">PRENOM DE L'ETUDIANT</label>
					<input type="text" id="prenom"  name="prenom" value="<?php echo $row['prenom']; ?>" class="form-control"><br>

					<label for="date_naissance">DATE DE NAISSANCE</label>
					<input type="date" id="date_naissance"  name="date_naissance" value="<?php echo $row['date_naissance']; ?>" class="form-control"><br>

					<label for="cursus">CURSUS SUIVI</label>
					<input type="text" id="cursus"  name="cursus" value="<?php echo $row['cursus']; ?>" class="form-control"><br>

					<label for="id_cursus">IDENTIFIANT DU CURSUS</label>
					<input type="number" id="id_cursus"  name="id_cursus" class="form-control"><br>

					<br>
					<input type="submit" name="update1" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div> <br><br><br>




</div>


<?php 

 require_once 'footer.php';