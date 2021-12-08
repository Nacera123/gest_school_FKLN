


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


        <div class = "header"></div>
        <div class = "row">
            <div class="container">
                <!-- <div class = "main">
                    <div class="admin">

                    </div>
                    <div class="parent">

                    </div>
                    <div class="enfant">

                    </div>
                    <div class="prof">

                    </div>
                </div> -->
                <div id="side">
                    <div class ="formation">
                        <h3 class="card-header">Formation</h3>
                        <ul class="list-group list-group-flush">

                            <?php foreach ($viewVars['cursusList'] as $cursus) : ?>
                            <li class="list-group-item"><?= $cursus->getNameCursus() ?>
                             frais <?= $cursus->getFrais() ?> </li>
                            <?php endforeach; ?>
                        </ul>
        
                    </div>

                    <div class ="formation">
                        <h3 class="card-header">Etudiant</h3>
                        <ul class="list-group list-group-flush">

                            <?php foreach ($viewVars['etudiantList'] as $etudiant) : ?>
                            <li class="list-group-item">nom :<?= $etudiant->getnomE() ?><br> 
                            prenom :<?= $etudiant->getprenomE() ?><br>
                            naissance: <?= $etudiant->getdate_naissanceE() ?> <br>
                            cursus: <?= $etudiant->getcursusE() ?> <br>
                        </li>
                            <?php endforeach; ?>
                        </ul>
        
                    </div>

                    <div class ="formation">
                        <h3 class="card-header">Matiere</h3>
                        <ul class="list-group list-group-flush">

                            <?php foreach ($viewVars['matiereList'] as $matiere) : ?>
                            <li class="list-group-item">matiere :<?= $matiere->get_matiereM() ?><br> 
                            <!-- prenom :<?= $etudiant->getprenomE() ?><br>
                            naissance: <?= $etudiant->getdate_naissanceE() ?> <br>
                            cursus: <?= $etudiant->getcursusE() ?> <br> -->
                            </li>
                            <?php endforeach; ?>
                            </ul>
                    </div>

                    <div class ="formation">
                        <h3 class="card-header">Note</h3>
                        <ul class="list-group list-group-flush">

                            <?php foreach ($viewVars['noteList'] as $note) : ?>
                            <li class="list-group-item">matiere:<?= $note->getmatiereN() ?><br> 
                            note:<?= $note->getnoteN() ?><br>
                            appreciation: <?= $note->getappreciationN() ?> <br>
                            </li>
                            <?php endforeach; ?>
                            </ul>
                    </div>

                    <div class ="formation">
                        <h3 class="card-header">Professeur</h3>
                        <ul class="list-group list-group-flush">

                            <?php foreach ($viewVars['professeurList'] as $professeur) : ?>
                            <li class="list-group-item">nom:<?= $professeur->getnomP() ?><br> 
                            prenom:<?= $professeur->getprenomP() ?><br>
                            matiere: <?= $professeur->getmatiereP() ?> <br>
                            </li>
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