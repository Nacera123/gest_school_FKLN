<html>

	<?php 
		require_once 'conn.php'; 

	
		echo "<div class='container'>";
		$sql="SELECT * FROM cursus";
		$result = $con->query($sql); 

		if( isset($_POST['delete'])){
			$sql = "DELETE FROM cursus WHERE id_cursus=" . $_POST['id_cursus'];
			if($con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}

		if( $result->num_rows > 0)
		{ 
	?>

<h2>Tous les utilisateurs</h2>
<h3>Table CURSUS</h3>
<table class="table table-bordered table-striped">
	<tr>
		<td>id_cursus</td>
		<td>nom_cursus</td>
		<td>frais_cursus</td>

		<td width="70px">Supprimer</td>
		<td width="70px">Modifier</td>
	</tr>
	<?php
		/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
		while( $row = $result->fetch_assoc()){ 
			echo "<form action='' method='POST'>";	//added
			echo "<input type='hidden' value='". $row['id_cursus']."' name='id_cursus' />"; //added
			echo "<tr>";

			echo "<td>".$row['id_cursus'] . "</td>";
			echo "<td>".$row['nom_cursus'] . "</td>";
			echo "<td>".$row['frais_cursus'] . "</td>";

			echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
			echo "<td><a href='editcursus?id=".$row['id_cursus']."' class='btn btn-info'>Edit</a></td>";
			echo "</tr>";
			echo "</form>"; //added 
		}
	?>
</table>


<?php 
	}
	else{
		echo "<br><br>Pas d'enregistrements";
	}


?> 


<?php 

	echo "<div class='container'>";

	$sql1= "SELECT * FROM etudiant";
	$result1 = $con->query($sql1);  

	//pour effacer toute la ligne 
	if( isset($_POST['delete1'])){
		$sql1 = "DELETE FROM etudiant WHERE id_etudiant=" . $_POST['id_etudiant'];
		if($con->query($sql1) === TRUE){
			echo "<div class='alert alert-success'>Successfully delete  user</div>";
		}
	}


	/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
	if( $result1->num_rows > 0)
	{ 
?>
<h3>Table ETUDIANT</h3>
<table class="table table-bordered table-striped">
	<tr>
		<td>Id_etudiant</td>
		<td>NOM</td>
		<td>PRENOM</td>
		<td>DATE DE NAISSANCE</td>
		<td>CURSUS</td>
		<td>Id_cursus</td>

		<td width="70px">Supprimer</td>
		<td width="70px">Modifier</td>
	</tr>
	<?php
		/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
		while( $row = $result1->fetch_assoc()){ 
			echo "<form action='' method='POST'>";	//added
			echo "<input type='hidden' value='". $row['id_etudiant']."' name='id_etudiant' />"; //added
			echo "<tr>";

			echo "<td>".$row['id_etudiant'] . "</td>";
			echo "<td>".$row['nom'] . "</td>";
			echo "<td>".$row['prenom'] . "</td>";
			echo "<td>".$row['date_naissance'] . "</td>";
			echo "<td>".$row['cursus'] . "</td>";
			echo "<td>".$row['id_cursus'] . "</td>";
					
			echo "<td><input type='submit' name='delete1' value='Delete' class='btn btn-danger' /></td>";  
			echo "<td><a href='editetudiant?id=".$row['id_etudiant']."' class='btn btn-info'>Edit</a></td>";
			echo "</tr>";
			echo "</form>"; //added 
		}
	?>
</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}

		echo "<div class='container'>";

	?> 

</div>

<div>


	<?php 


		$sql2="SELECT * FROM professeur";
		$result2 = $con->query($sql2);  /* Execution de la requete avec retour d'un tableau*/ 


		//pour effacer toute la ligne 
		if( isset($_POST['delete2'])){
			$sql2 = "DELETE FROM professeur WHERE id_professeur=" . $_POST['id_professeur'];
			if($con->query($sql2) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}


		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result2->num_rows > 0)
		{ 
	?>
	<h3>Table PROFESSEUR</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_professeur</td>
			<td>NOM</td>
			<td>PRENOM</td>
			<td>MATIERE</td>

			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result2->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_professeur']."' name='id_professeur' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_professeur'] . "</td>";
				echo "<td>".$row['nom'] . "</td>";
				echo "<td>".$row['prenom'] . "</td>";
				echo "<td>".$row['matiere'] . "</td>";
				
				echo "<td><input type='submit' name='delete2' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editprofesseur?id=".$row['id_professeur']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>

<div>


	<?php 


		$sql3="SELECT * FROM cursus_professeur";
		$result3 = $con->query($sql3);  /* Execution de la requete avec retour d'un tableau*/ 

		//pour effacer toute la ligne 
		if( isset($_POST['delete3'])){
			$sql3 = "DELETE FROM cursus_professeur WHERE id_cursus=" . $_POST['id_cursus'];
			if($con->query($sql3) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}
		

		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result3->num_rows > 0)
		{ 
	?>
	<h3>Table CURSUS / PROFESSEUR</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_cursus</td>
			<td>Id_professeur</td>

			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result3->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_cursus']."' name='id_cursus' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_cursus'] . "</td>";
				echo "<td>".$row['id_professeur'] . "</td>";
				
				echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editcurs_prof?id=".$row['id_cursus']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>



<div>


	<?php 


		$sql4="SELECT * FROM note";
		$result4 = $con->query($sql4);  /* Execution de la requete avec retour d'un tableau*/ 


		//pour effacer toute la ligne 
		if( isset($_POST['delete4'])){
			$sql4 = "DELETE FROM note WHERE id_note=" . $_POST['id_note'];
			if($con->query($sql4) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}
		

		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result4->num_rows > 0)
		{ 
	?>
	<h3>Table NOTE</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_note</td>
			<td>Id_MATIERE</td>
			<td>NOTE</td>
			<td>APPRECIATION</td>
			<td>Id_etudiant</td>
			<td>Id_professeur</td>
			<td>Id_cursus</td>

			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result4->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_note']."' name='id_note' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_note'] . "</td>";
				echo "<td>".$row['id_matiere'] . "</td>";
				echo "<td>".$row['note'] . "</td>";
				echo "<td>".$row['appreciation'] . "</td>";
				echo "<td>".$row['id_etudiant'] . "</td>";
				echo "<td>".$row['id_professeur'] . "</td>";
				echo "<td>".$row['id_cursus'] . "</td>";


				echo "<td><input type='submit' name='delete4' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editnote?id=".$row['id_note']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>

<div>

	<?php 


		$sql5="SELECT * FROM utilisateur";
		$result5 = $con->query($sql5);  /* Execution de la requete avec retour d'un tableau*/ 

		//pour effacer toute la ligne 
		if( isset($_POST['delete5'])){
			$sql5 = "DELETE FROM utilisateur WHERE id_utilisateur=" . $_POST['id_utilisateur'];
			if($con->query($sql5) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}
		

		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result5->num_rows > 0)
		{ 
	?>
	<h3>Table UTILISATEUR</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_utilisateur</td>
			<td>NOM </td>
			<td>PRENOM</td>
			<td>@-EMAIL</td>
			<td>MOT DE PASSE</td>
			<td>TELEPHONE</td>
			<td>ADRESSE</td>
			<td>CODE POSTAL</td>
			<td>FONCTION</td>

			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result5->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_utilisateur']."' name='id_utilisateur' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_utilisateur'] . "</td>";
				echo "<td>".$row['nom'] . "</td>";
				echo "<td>".$row['prenom'] . "</td>";
				echo "<td>".$row['email'] . "</td>";
				echo "<td>".$row['mot_de_passe'] . "</td>";
				echo "<td>".$row['mobile'] . "</td>";
				echo "<td>".$row['adresse'] . "</td>";
				echo "<td>".$row['code_postal'] . "</td>";
				echo "<td>".$row['fonction'] . "</td>";
				
				echo "<td><input type='submit' name='delete5' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editutilisateur?id=".$row['id_utilisateur']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>


<div>

	<?php 


		$sql6="SELECT * FROM matiere";
		$result6 = $con->query($sql6);  /* Execution de la requete avec retour d'un tableau*/ 

		//pour effacer toute la ligne 
		if( isset($_POST['delete6'])){
			$sql6 = "DELETE FROM matiere WHERE id_matiere=" . $_POST['id_matiere'];
			if($con->query($sql6) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}
		

		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result5->num_rows > 0)
		{ 
	?>
	<h3>Table MATIERE</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_matiere</td>
			<td>MATIERE</td>
			<td>Id_cursus</td>


			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result6->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_matiere']."' name='id_matiere' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_matiere'] . "</td>";
				echo "<td>".$row['matiere'] . "</td>";
				echo "<td>".$row['id_cursus'] . "</td>";
				
				echo "<td><input type='submit' name='delete6' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editmatiere?id=".$row['id_matiere']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>

<div>

	<?php 


		$sql7="SELECT * FROM famille";
		$result7 = $con->query($sql7);  /* Execution de la requete avec retour d'un tableau*/ 

		//pour effacer toute la ligne 
		if( isset($_POST['delete7'])){
			$sql7 = "DELETE FROM famille WHERE id_famille=" . $_POST['id_famille'];
			if($con->query($sql7) === TRUE){
				echo "<div class='alert alert-success'>Successfully delete  user</div>";
			}
		}
		

		/*Verification du nombre de lignes du tableau retourné; Si > O alors presence données sinon  absence*/ 
		if( $result5->num_rows > 0)
		{ 
	?>
	<h3>Table FAMILLE</h3>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Id_famille</td>
			<td>NOM DU PARENT</td>
			<td>PRENOM DU PARENT</td>
			<td>TELEPHONE</td>
			<td>ADRESSE</td>
			<td>CODE POSTAL</td>
			<td>NOM DE L'ENFANT</td>
			<td>PRENOM DE L'ENFANT</td>
			<td> DATE DE NAISSANCE DE L'ENFANT</td>
			<td>Id_cursus</td>
			<td>Id_Etudiant</td>



			<td width="70px">Supprimer</td>
			<td width="70px">Modifier</td>
		</tr>
		<?php
			/*Parcours du tableau retourné pour affichage des infos ligne par ligne*/ 
			while( $row = $result7->fetch_assoc()){ 
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['id_famille']."' name='id_famille' />"; //added
				echo "<tr>";

				echo "<td>".$row['id_famille'] . "</td>";
				echo "<td>".$row['nom_parent'] . "</td>";
				echo "<td>".$row['prenom_parent'] . "</td>";
				echo "<td>".$row['mobile'] . "</td>";
				echo "<td>".$row['adresse'] . "</td>";
				echo "<td>".$row['code_postal'] . "</td>";
				echo "<td>".$row['nom_enfant'] . "</td>";
				echo "<td>".$row['prenom_enfant'] . "</td>";
				echo "<td>".$row['dn_enfant'] . "</td>";
				echo "<td>".$row['id_cursus'] . "</td>";
				echo "<td>".$row['id_etudiant'] . "</td>";



				
				echo "<td><input type='submit' name='delete7' value='Delete' class='btn btn-danger' /></td>";  
				echo "<td><a href='editfamille'?id=".$row['id_famille']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added 
			}
		?>
	</table>


	<?php 
		}
		else
		{
			echo "<br><br>Pas d'enregistrements";
		}


	?> 

</div>





