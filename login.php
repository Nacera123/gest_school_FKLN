<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<?php 
session_start();
require ("../database/db_data.php");
if(empty($_POST["email"]) || empty($_POST["mot_de_passe"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
			$connexion= new DBData (); 
			$reslt = $connexion->get_login();
		   }
            
    ?>

<form class="box" action="" method="post" name="login">
<h1>connexion client</h1>
<input type="text" class="box-input" name="email" placeholder="Email"/>
<input type="password" class=" box-input" name="mot_de_passe" placeholder="Mot de passe"/>
<input type="submit" value="Connexion " name="submit" class="box-button"/>
<p class="box-register">Vous n'avez pas encore un compte ?<a href="register.php">S'inscrire</a></p>
<?php if (!empty($message)) : ?>
    <p class="errorMessage"><?= $message; ?></p>
<?php endif; ?>
</form>
</body>
</html>