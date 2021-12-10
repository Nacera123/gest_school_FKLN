

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="./css/connect.css" rel="stylesheet" >
      
        <title>Connexion</title>
    </head>

        <!--Navbar-->

        <div class="sticky-top">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="navbar">
                    <div>
                    <a href="acceuil"> <button class="btn btn-outline-primary" type="submit>">Revenir a la page d'Acceuil</button></a>
                    <div display= "none">
            
                
                </div>
            </div>
        </div> 


        <div class = "formulairec">
            <div class="formulaire1c"> <h1>CONNEXION</h1></div><br><br>
            <div class="container">



            <?php 
              if(empty($_POST["email"]) || empty($_POST["mot_de_passe"]))  
              {  
                    $message = '<label>All fields are required</label>';  
              }  
              else  
              {  
              $connexion= new DBData (); 
              $reslt = $connexion->login();
              }
            
            ?>

                
                <form method='POST'>
                    <div class="form-group" id ="divconn">
                        <label for="nom">Entrez votre Email</label>
                        <input type="text" class="form-control" id="nom" placeholder="@mail" name="email">
                    </div><br>
                    
                    <div class="form-group"id ="divconn">
                        <label for="email">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="email" placeholder="votre mot de passe" name="mot_de_passe">
                    </div><br><br>

                    <div class="bouton">
                        <input type ="submit" class="btn btn-secondary" value="Connexion">
                    </div>
                    
                    <?php if (!empty($message)) : ?>
                        <p class="errorMessage"><?= $message; ?></p>
                    <?php endif; ?>

                                           
                  </form>
            </div>
        </div>

       
    </body>




</html>