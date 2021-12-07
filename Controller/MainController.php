<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {
        // $viewVars est disponible dans chaque fichier de vue
        // include __DIR__ . '/../views/header.tpl.php';
        // include __DIR__ . '/../views/' . $viewName . '.tpl.php';
        // include __DIR__ . '/../views/footer.tpl.php';




        include __DIR__. '/../views/register.php';
        // include __DIR__. '../class.cursusprof.php';
        // include __DIR__. '../class.etudiant.php';
        // include __DIR__. '../class.matiere.php';
        // include __DIR__. '../class.note.php';
        // include __DIR__. '../class.professeur.php';
        // include __DIR__. '../class.utilisateur.php';






    }
}