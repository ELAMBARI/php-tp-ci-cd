<h1>Bienvenu : </h1>

<?php

// Définition d'une fonction pour calculer la somme de deux nombres
function calculerSomme($a, $b) {
    $somme = $a + $b;
    return $somme;
}

// Définition d'un tableau de noms
$noms = array("Anas", "Hamza", "Mariame", "ziad");

// Parcourir le tableau de noms et afficher chaque nom
foreach($noms as $nom) {
    echo "Nom : " . $nom . "<br>";
}

// Utilisation d'une condition pour afficher un message différent en fonction de l'heure
$heure = date("H");
if ($heure < "12") {
    echo "Bonjour !";
} else {
    echo "Bon après-midi !";
}


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Créer un logger
$log = new Logger('nom-du-logger');

// Ajouter un gestionnaire de fichier
$log->pushHandler(new StreamHandler('chemin/vers/le/fichier.log', Logger::WARNING));

// Écrire un message de journalisation
$log->warning('Un avertissement s\'est produit !');


?>







