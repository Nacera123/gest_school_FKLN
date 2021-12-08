<?php 

// require_once 'connect.php';
// require_once 'header.php';

?>
<div class="container">
	<?php 


		if(isset($_GET['update'])){

			if( empty($_POST['nom_cursus']) && empty($_POST['frais_cursus']) ){

				echo "Please fillout all required fields"; 
			}else{	
				$nom_cursus 		= $_POST['nom_cursus'];
				$frais_cursus	 	= $_POST['frais_cursus'];



				$sql = "UPDATE cursus SET nom_cursus='{$nom_cursus}', frais_cursus='{$frais_cursus}'  
							WHERE id_cursus=" . $_POST['id_cursus'];

				if( $con->query($sql) === TRUE){
					echo "<div class='alert alert-success'>Successfully updated  cursus</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
				}
			}
		}

		
		$id= $_GET['id'];
		$sql = "SELECT * FROM cursus WHERE id_cursus={$id}";
		$result = $con->query($sql); 

		if($result->num_rows < 1){
			header('Location: index.php'); 
			exit;
		}
		$row = $result->fetch_assoc();





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


		$id1= $_GET['id'];

		$sql1 = "SELECT * FROM etudiant WHERE id_etudiant={$id1}";
		$result1 = $con->query($sql1);  

		if($result1->num_rows < 1){
			header('Location: index.php'); 
			exit;
		}
		$row = $result1->fetch_assoc();







		// if(isset($_POST['update2'])){

		// if( empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['matiere']) ){ 

		// 		echo "Please fillout all required fields"; 
		// 	}else{	
		// 		$nom 				= $_POST['nom'];
		// 		$prenom	 			= $_POST['prenom'];
		// 		$matiere			= $_POST['matiere'];


		// 		$sql2 = "UPDATE professeur 
		// 				SET nom='{$nom}', prenom='{$prenom}', matiere='{$matiere}'  
		// 				WHERE id_professeur=" . $_POST['id_professeur'];

		// 		if( $con->query($sql2) === TRUE){
		// 			echo "<div class='alert alert-success'>Successfully updated  table professeur</div>";
		// 		}else{
		// 			echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
		// 		}
		// 	}
		// }

		// $id2= $_GET['id2'];

		// $sql2 = "SELECT * FROM professeur WHERE id_professeur={$id2}";
		// $result2 = $con->query($sql2); 

		// if($result2->num_rows < 1){
		// 	header('Location: index.php'); 
		// 	exit;
		// }
		// $row = $result2->fetch_assoc();  




		// if(isset($_POST['update3'])){

		// 	if( empty($_POST['id_cursus']) && empty($_POST['id_professeur']) ){

		// 		echo "Please fillout all required fields"; 
		// 	}else{	
		// 		$id_cursus 			= $_POST['id_cursus'];
		// 		$id_professeur	 	= $_POST['id_professeur'];
	

		// 		$sql3= "UPDATE cursus_professeur 
		// 			SET id_cursus='{$id_cursus}', id_professeur='{$id_professeur}'
		// 			WHERE id_cursus=" . $_POST['id_cursus'];

		// 		if( $con->query($sql3) === TRUE){
		// 			echo "<div class='alert alert-success'>Successfully updated  table professeur</div>";
		// 		}else{
		// 			echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
		// 		}
		// 	}
		// }


		// $id3= $_GET['id3'];

		// $sql3 = "SELECT * FROM cursus_professeur WHERE id_cursus={$id3}";
		// $result3 = $con->query($sql3); 

		// if($result3->num_rows < 1){
		// 	header('Location: index.php'); 
		// 	exit;
		// }
		// $row = $result3->fetch_assoc(); 






		// if(isset($_POST['update4'])){

		// 	if( empty($_POST['matiere']) && empty($_POST['note'])&& empty($_POST['appreciation'])
		// 	&& empty($_POST['id_etudiant']) && empty($_POST['id_professeur']) && empty($_POST['id_cursus'])){

		// 		echo "Please fillout all required fields"; 
		// 	}else{	
		// 		$matiere 			= $_POST['matiere'];
		// 		$note	 			= $_POST['note'];
		// 		$appreciation 		= $_POST['appreciation'];
		// 		$id_etudiant	 	= $_POST['id_etudiant'];
		// 		$id_professeur 		= $_POST['id_professeur'];
		// 		$id_cursus	 		= $_POST['id_cursus'];


		// 		$sql4= "UPDATE note 
		// 			SET matiere='{$matiere}', note='{$note}', appreciation='{$appreciation}', id_etudiant='{$id_etudiant}', id_professeur='{$id_professeur}', id_cursus='{$id_cursus}'
		// 			WHERE id_note=" . $_POST['id_note'];

		// 		if( $con->query($sql4) === TRUE){
		// 			echo "<div class='alert alert-success'>Successfully updated  table NOTE</div>";
		// 		}else{
		// 			echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
		// 		}
		// 	}
		// }

		// $id4= $_GET['id4'];
		// $sql4 = "SELECT * FROM note WHERE id_note={$id4}";
		// $result4 = $con->query($sql4); 

		// if($result4->num_rows < 1){
		// 	header('Location: index.php');
		// 	exit;
		// }
		// $row = $result4->fetch_assoc();


		// if(isset($_POST['update5'])){

		// 	if( empty($_POST['nom']) && empty($_POST['prenom'])&& empty($_POST['email'])
		// 	&& empty($_POST['mot_de_passe']) && empty($_POST['mobile'])&& empty($_POST['adresse'])
		// 	&& empty($_POST['code_postal'])&& empty($_POST['fonction'])){

		// 		echo "Please fillout all required fields"; 
		// 	}else{	
		// 		$nom 				= $_POST['nom'];
		// 		$prenom	 			= $_POST['prenom'];
		// 		$email 				= $_POST['email'];
		// 		$mot_de_passe	 	= $_POST['mot_de_passe'];
		// 		$mobile 			= $_POST['mobile'];
		// 		$adresse	 		= $_POST['adresse'];
		// 		$code_postal	 	= $_POST['code_postal'];
		// 		$fonction	 		= $_POST['fonction'];

		// 		$sql5= "UPDATE utilisateur 
		// 			SET nom='{$nom}', prenom='{$prenom}', email='{$email}', mot_de_passe='{$mot_de_passe}', mobile='{$mobile}', adresse='{$adresse}', code_postal='{$code_postal}', fonction='{$fonction}'
		// 			WHERE id_utilisateur=" . $_POST['id_utilisateur'];

		// 		if( $con->query($sql5) === TRUE){
		// 			echo "<div class='alert alert-success'>Successfully updated  table UTILISATEUR</div>";
		// 		}else{
		// 			echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
		// 		}
		// 	}
		// }

		// $id5= $_GET['id5'];
		// $sql5 = "SELECT * FROM utilisateur WHERE id_utilisateur={$id5}";
		// $result5 = $con->query($sql5); 

		// if($result5->num_rows < 1){
		// 	header('Location: index.php'); 
		// 	exit;
		// }
		// $row = $result5->fetch_assoc(); 
		
		



		// if(isset($_POST['update6'])){

		// 	if( empty($_POST['matiere']) && empty($_POST['id_utilisateur'])&& empty($_POST['id_cursus'])){

		// 		echo "Please fillout all required fields"; 
		// 	}else{	
		// 		$matiere 			= $_POST['matiere'];
		// 		$id_utilisateur	 	= $_POST['id_utilisateur'];
		// 		$id_cursus 			= $_POST['id_cursus'];

		// 		$sql6= "UPDATE matiere 
		// 			SET matiere='{$matiere}', id_utilisateur='{$id_utilisateur}', id_cursus='{$id_cursus}'
		// 			WHERE id_matiere=" . $_POST['id_matiere'];

		// 		if( $con->query($sql6) === TRUE){
		// 			echo "<div class='alert alert-success'>Successfully updated  table MATIERE</div>";
		// 		}else{
		// 			echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
		// 		}
		// 	}
		// }

		// $id6= $_GET['id6'];
		// $sql6 = "SELECT * FROM matiere WHERE id_matierer={$id6}";
		// $result6 = $con->query($sql6);  

		// if($result6->num_rows < 1){
		// 	header('Location: index.php'); 
		// 	exit;
		// }
		// $row = $result6->fetch_assoc(); 




	?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY CURSUS</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php echo $row['id_cursus']; ?>" name="id_cursus">

					<label for="nom_cursus">NOM DU CURSUS</label>
					<input type="text" $id="id_cursus"  name="nom_cursus" value="<?php echo $row['nom_cursus']; ?>" class="form-control"><br>

					<label for="frais_cursus">COUT DU CURUS</label>
					<input type="number" $id="frais_cursus"  name="frais_cursus" value="<?php echo $row['frais_cursus']; ?>" class="form-control"><br>

					<br>
					<input type="submit" name="update" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div><br><br><br>


	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table ETUDIANT</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php echo $row['id_etudiant']; ?>" name="id_etudiant">

					<label for="nom">NOM DE L'ETUDIANT</label>
					<input type="text" $id1="nom"  name="nom" value="<?php echo $row['nom']; ?>" class="form-control"><br>

					<label for="prenom">PRENOM DE L'ETUDIANT</label>
					<input type="text" $id1="prenom"  name="prenom" value="<?php echo $row['prenom']; ?>" class="form-control"><br>

					<label for="date_naissance">DATE DE NAISSANCE</label>
					<input type="date" $id1="date_naissance"  name="date_naissance" value="<?php echo $row['date_naissance']; ?>" class="form-control"><br>

					<label for="cursus">CURSUS SUIVI</label>
					<input type="text" $id1="cursus"  name="cursus" value="<?php echo $row['cursus']; ?>" class="form-control"><br>

					<label for="id_cursus">IDENTIFIANT DU CURSUS</label>
					<input type="number" $id1="id_cursus"  name="id_cursus" class="form-control"><br>

					<br>
					<input type="submit" name="update1" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div> <br><br><br>



	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table PROFESSEUR</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php 
					// echo $row['id_professeur']; 
					?>" name="id_professeur">

					<label for="nom">NOM DU PROFESSEUR</label>
					<input type="text" id="nom"  name="nom" class="form-control"><br>

					<label for="prenom">PRENOM DU PROFESSEUR</label>
					<input type="text"  name="prenom" id="prenom" class="form-control"><br>

					<label for="matiere">MATIERE ENSEIGNEE</label>
					<input type="text"  name="matiere" id="matiere" class="form-control"><br>


					<br>
					<input type="submit" name="update2" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div><br><br><br>
 -->

	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table CURSUS / PROFESSEUR</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php 
					// echo $row['id_cursus']; 
					?>" name="id_cursus">

					<label for="id_cursus">Id_cursus</label>
					<input type="number" id="id_cursus"  name="id_cursus" class="form-control"><br>

					<label for="id_professeur">Id_professeur</label>
					<input type="number"  name="id_professeur" id="id_professeur" class="form-control"><br>

					<br>
					<input type="submit" name="update3" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div><br><br><br> -->



	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table NOTE</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php 
					// echo $row['id_note']; 
					?>" name="id_note">

					<label for="nom">NOM DE L'UTILISATEUR</label>
					<input type="text" id="nom"  name="nom" class="form-control"><br>

					<label for="prenom">PRENOM DE L'UTILISATEUR</label>
					<input type="text"  name="prenom" id="prenom" class="form-control"><br>

					<label for="email">@-EMAIL</label>
					<input type="text" id="email"  name="email" class="form-control"><br>

					<label for="mot_de_passe">MOT DE PASSE</label>
					<input type="password"  name="mot_de_passe" id="mot_de_passe" class="form-control"><br>
					
					<label for="mobile">TELEPHONE</label>
					<input type="text"  name="mobile" id="mobile" class="form-control"><br>

					<label for="adresse">ADRESSE</label>
					<input type="text"  name="adresse" id="adresse" class="form-control"><br> -->

					<!-- <label for="code_postal">CODE POSTAL</label>
					<input type="number"  name="code_postal" id="code_postal" class="form-control"><br>

					<label for="fonction">FONCTION</label>
					<input type="text"  name="fonction" id="fonction" class="form-control"><br>


					<br>
					<input type="submit" name="update4" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div><br><br><br> -->
 -->

	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table UTILISATEUR</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php 
					// echo $row[
						// 'id_utilisateur']; 
						?>" name="id_utilisateur">

					<label for="matiere">MATIERE</label>
					<input type="text" id="matiere"  name="matiere" class="form-control"><br>

					<label for="note">NOTE</label>
					<input type="number"  name="note" id="note" class="form-control"><br>

					<label for="appreciation">APPRECIATION</label>
					<input type="text" id="appreciation"  name="appreciation" class="form-control"><br>

					<label for="id_etudiant">Id_etudiant</label>
					<input type="number"  name="id_etudiant" id="id_etudiant" class="form-control"><br>
					
					<label for="id_professeur">Id_professeur</label> -->
					<!-- <input type="number"  name="id_professeur" id="id_professeur" class="form-control"><br>

					<label for="id_cursus">Id_cursus</label>
					<input type="number"  name="id_cursus" id="id_cursus" class="form-control"><br> -->


					<!-- <br>
					<input type="submit" name="update5" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div> <br><br><br> --> -->



	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY Table MATIERE</h3> 
				<form action="" method="POST">

					<input type="hidden" value="<?php 
					// echo $row['id_matiere']; 
					?>" name="id_matiere">

					<label for="matiere">MATIERE</label>
					<input type="text" id="matiere"  name="matiere" class="form-control"><br>

					<label for="id_utilisateur">Id_utilisateur</label>
					<input type="number"  name="id_utilisateur" id="id_utilisateur" class="form-control"><br>

					<label for="id_cursus">Id_cursus</label>
					<input type="text" id="id_cursus"  name="id_cursus" class="form-control"><br>

					<br>
					<input type="submit" name="update6" class="btn btn-success" value="Update">
				</form>
			</div>
		</div>

	</div> 

</div> --> -->


<?php 

 require_once 'footer.php';