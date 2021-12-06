<?php

require '../class/ClassEnfant.php';
// require './data.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

</head>


<body>
    <div class= "corps">

        <div class = "infperso">
            <br><h5>Mes informations personnelles</h5><br><br>
            <tr>

                <li> NOM : <?php echo $EnfantList-> get_Nom()?></li>
                <li> PRENOM : <?php echo $EnfantList-> get_Prenom()?></li>
                <li> DATE DE NAISSANCE : <?php echo $EnfantList-> get_date()?></li>
                <li> NUMERO ETUDIANT : <?php echo $EnfantList-> get_Numero()?></li>

            </tr>
            
            
        </div>


        <div class ="bulletin">

            <table class ="table">
                <thead>
                    <tr>
                        <td></td>
                        <td>MOYENNE</td>
                        <td>APPRECIETION</td>
                    </tr>

                </thead>

                <tbody>
                    <?php foreach ($NoteList as $note) :?>
                    <tr>
                        <td><?= $note-> get_note()?></td>
                        <td><?= $note->  get_appreciation()?></td>
                        <td><?= $note-> matiere?></td>

                    </tr>
                    <?php endforeach?>





                </tbody>
            </table>




        </div>


    </body>
</html>

<style>

    .corps{

    height: 1500px;
    display:-ms-flexbox; 
    display: flex;
    flex:100%;

    }

    .infperso{

    height: 200px; width: 300px;
    background-color: rgb(151, 148, 148);
    margin-top: 20px;
    margin-left: 10px;


    }

    .bulletin{
    margin-top: 200px;
    background-color: rgb(223, 215, 215);
    height: 700px; width: 700px;
    margin-left: auto;
    margin-right: auto;


    }

    .table{
        height: 700px; width: 700px;
    
    }





</style>