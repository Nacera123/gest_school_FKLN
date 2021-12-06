<?php
require '../class/ClassCursus.php';


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="../index.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    </head>

    <body>


        <div class = "header"></div>
        <div class = "row">
            <div class="container">
                <div class = "main">
                    <div class="admin">

                    </div>
                    <div class="parent">

                    </div>
                    <div class="enfant">

                    </div>
                    <div class="prof">

                    </div>
                </div>
                <div id="side">
                    <div class ="formation">
                        <h3 class="card-header">Formation</h3>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($FormationList as $Formation) : ?>
                            <li class="list-group-item"><?=$Formation->cursus ?> frais <?=$Formation->frais ?> </li>
                            <?php endforeach; ?>
                        </ul>
        
                    </div>
                </div>
            </div>
            <div class = "footer">

            </div>
        </div>

       
    </body>
</html>


<style>

    .header{

    height: 400px;
    background-color: rgb(108, 179, 155);

    }









</style>