<?php

if(empty($_GET['prenom']) or empty($_GET['sexe'])){
    header('Location: /ex3');
    exit();
}

$title = "Exercice 3";

$sexe = [
    'H' => 'Monsieur',
    'F' => 'Madame' ];

$content = "Bienvenue ".$sexe[$_GET['sexe']]." ".$_GET['prenom'];

include '../template.php';

?>


