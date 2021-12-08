<?php 

require_once 'connect.php';

require_once 'header.php';


?>
<div class="container">
	<?php 
	
		if(isset($_POST['addnew'])){

			if( empty($_POST['nom_cursus']) || empty($_POST['frais_cursus']) ){
				echo "Champs obligatoires"; 
			}else{		
				$nom_cursus 		= $_POST['nom_cursus'];
				$frais_cursus	 	= $_POST['frais_cursus'];

				$sql = "INSERT INTO cursus (nom_cursus,frais_cursus) 
				VALUES('$nom_cursus ','$frais_cursus')";

				if( $con->query($sql) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table CURSUS</h3> 
				<form action="" method="POST">
					<label for="Nom">NOM DU CURSUS</label>
					<input type="text" id="Nom"  name="nom_cursus" class="form-control"><br>

					<label for="Prenom">COUT DU CURUS</label>
					<input type="number"  name="frais_cursus" id="Prenom" class="form-control"><br>

					<br>

					<input type="submit" name="addnew" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div><br><br>



	<?php 
	
		if(isset($_POST['addnew1'])){

			if( empty($_POST['nom'])||empty($_POST['prenom'])||empty($_POST['date_naissance'])
			||empty($_POST['cursus'])||empty($_POST['id_cursus'])){ 

				echo "Champs obligatoires"; 
			}else{	
	
				$nom 				= $_POST['nom'];
				$prenom 			= $_POST['prenom'];
				$date_naissance		= $_POST['date_naissance'];
				$cursus				= $_POST['cursus'];
				$id_cursus			= $_POST['id_cursus'];

				$sql1 = "INSERT INTO etudiant (nom, prenom, date_naissance, cursus, id_cursus ) 
				VALUES('$nom', '$prenom', '$date_naissance', '$cursus', '$id_cursus')";

				if( $con->query($sql1) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table ETUDIANT</h3> 
				<form action="" method="POST">
					<label for="Nom">NOM DE L'ETUDIANT</label>
					<input type="text" id="Nom"  name="nom" class="form-control"><br>
					
					<label for="Nom">PRENOM DE L'ETUDIANT</label>
					<input type="text" id="Nom"  name="prenom" class="form-control"><br>

					<label for="Nom">DATE DE NAISSANCE</label>
					<input type="date" id="Nom"  name="date_naissance" class="form-control"><br>

					<label for="Nom">CURSUS SUIVI</label>
					<input type="text" id="Nom"  name="cursus" class="form-control"><br>

					<label for="Nom">IDENTIFIANT DU CURSUS</label>
					<input type="number" id="Nom"  name="id_cursus" class="form-control"><br>

					<br>

					<input type="submit" name="addnew1" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div>

	</div><br><br>


	<?php 
	
		if(isset($_POST['addnew2'])){

			if( empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['matiere']) ){ 

				echo "Champs obligatoires"; 
			}else{	
	
				$nom 				= $_POST['nom'];
				$prenom	 			= $_POST['prenom'];
				$matiere			= $_POST['matiere'];

				$sql2 = "INSERT INTO professeur (nom, prenom,matiere) 
				VALUES('$nom','$prenom','$matiere')";

				if( $con->query($sql2) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table PROFESSEUR</h3> 
				<form action="" method="POST">

					<label for="nom">NOM DU PROFESSEUR</label>
					<input type="text" id="nom"  name="nom" class="form-control"><br>

					<label for="prenom">PRENOM DU PROFESSEUR</label>
					<input type="text"  name="prenom" id="prenom" class="form-control"><br>

					<label for="matiere">MATIERE ENSEIGNEE</label>
					<input type="text"  name="matiere" id="matiere" class="form-control"><br>

					
					<br>

					<input type="submit" name="addnew2" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div>

	</div><br><br>




	<?php 
	
	if(isset($_POST['addnew3'])){

		if( empty($_POST['id_cursus']) || empty($_POST['id_professeur']) ){
			echo "Champs obligatoires"; 
		}else{		
			$id_cursus 			= $_POST['id_cursus'];
			$id_professeur	 	= $_POST['id_professeur'];

			$sql3 = "INSERT INTO cursus_professeur (id_cursus,id_professeur) 
			VALUES('$id_cursus ','$id_professeur')";

			if( $con->query($sql3) === TRUE){
				echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
			}
		}
	}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table CURSUS / PROFESSEUR</h3> 
				<form action="" method="POST">
					<label for="id_cursus">Id_cursus</label>
					<input type="number" id="id_cursus"  name="id_cursus" class="form-control"><br>

					<label for="id_professeur">Id_professeur</label>
					<input type="number"  name="id_professeur" id="id_professeur" class="form-control"><br>

					<br>

					<input type="submit" name="addnew3" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div><br><br>


	<?php 
	
		if(isset($_POST['addnew4'])){

			if( empty($_POST['matiere']) || empty($_POST['note'])|| empty($_POST['appreciation'])
			|| empty($_POST['id_etudiant']) || empty($_POST['id_professeur'])|| empty($_POST['id_cursus'])){
				echo "Champs obligatoires"; 
			}else{		
				$matiere 			= $_POST['matiere'];
				$note	 			= $_POST['note'];
				$appreciation 		= $_POST['appreciation'];
				$id_etudiant	 	= $_POST['id_etudiant'];
				$id_professeur 		= $_POST['id_professeur'];
				$id_cursus	 		= $_POST['id_cursus'];


				$sql4 = "INSERT INTO note (matiere,note,appreciation,id_etudiant,id_professeur,id_cursus) 
				VALUES('$matiere','$note','$appreciation','$id_etudiant','$id_professeur','$id_cursus')";

				if( $con->query($sql4) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table NOTE</h3> 
				<form action="" method="POST">
					<label for="matiere">MATIERE</label>
					<input type="text" id="matiere"  name="matiere" class="form-control"><br>

					<label for="note">NOTE</label>
					<input type="number"  name="note" id="note" class="form-control"><br>

					<label for="appreciation">APPRECIATION</label>
					<input type="text" id="appreciation"  name="appreciation" class="form-control"><br>

					<label for="id_etudiant">Id_etudiant</label>
					<input type="number"  name="id_etudiant" id="id_etudiant" class="form-control"><br>
					
					<label for="id_professeur">Id_professeur</label>
					<input type="number"  name="id_professeur" id="id_professeur" class="form-control"><br>

					<label for="id_cursus">Id_cursus</label>
					<input type="number"  name="id_cursus" id="id_cursus" class="form-control"><br>

					<br>

					<input type="submit" name="addnew4" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div><br><br>



	<?php 
	
		if(isset($_POST['addnew5'])){

			if( empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['email'])
			|| empty($_POST['mot_de_passe']) || empty($_POST['mobile'])|| empty($_POST['adresse'])
			|| empty($_POST['code_postal'])|| empty($_POST['fonction'])){
				echo "Champs obligatoires"; 
			}else{		
				$nom 				= $_POST['nom'];
				$prenom	 			= $_POST['prenom'];
				$email 				= $_POST['email'];
				$mot_de_passe	 	= $_POST['mot_de_passe'];
				$mobile 			= $_POST['mobile'];
				$adresse	 		= $_POST['adresse'];
				$code_postal	 	= $_POST['code_postal'];
				$fonction	 		= $_POST['fonction'];



				$sql5 = "INSERT INTO utilisateur (nom,prenom,email,mot_de_passe,mobile,adresse,code_postal,fonction) 
				VALUES('$nom','$prenom','$email','$mot_de_passe','$mobile','$adresse','$code_postal','$fonction')";

				if( $con->query($sql5) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table UTILISATEUR</h3> 
				<form action="" method="POST">

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
					<input type="text"  name="adresse" id="adresse" class="form-control"><br>

					<label for="code_postal">CODE POSTAL</label>
					<input type="number"  name="code_postal" id="code_postal" class="form-control"><br>

					<label for="fonction">FONCTION</label>
					<input type="text"  name="fonction" id="fonction" class="form-control"><br>

					<br>

					<input type="submit" name="addnew5" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div><br><br>



	<?php 
	
		if(isset($_POST['addnew6'])){

			if( empty($_POST['matiere']) || empty($_POST['id_utilisateur'])|| empty($_POST['id_cursus'])){
				echo "Champs obligatoires"; 
			}else{		
				$matiere 			= $_POST['matiere'];
				$id_utilisateur	 	= $_POST['id_utilisateur'];
				$id_cursus 			= $_POST['id_cursus'];

				$sql6 = "INSERT INTO matiere (matiere,id_utilisateur,id_cursus) 
				VALUES('$matiere','$id_utilisateur','$id_cursus')";

				if( $con->query($sql6) === TRUE){
					echo "<div class='alert alert-success'>Nouvel utilisateur ajouté avec succès</div>";
				}else{
					echo "<div class='alert alert-danger'>Error: ajout impossible</div>";
				}
			}
		}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Table MATIERE</h3> 
				<form action="" method="POST">
					<label for="matiere">MATIERE</label>
					<input type="text" id="matiere"  name="matiere" class="form-control"><br>

					<label for="id_utilisateur">Id_utilisateur</label>
					<input type="number"  name="id_utilisateur" id="id_utilisateur" class="form-control"><br>

					<label for="id_cursus">Id_cursus</label>
					<input type="text" id="id_cursus"  name="id_cursus" class="form-control"><br>


					<br>

					<input type="submit" name="addnew6" class="btn btn-success" value="Ajouter">
				</form>
			</div>
		</div>
	</div><br><br>







</div>







<?php 

 require_once 'footer.php';