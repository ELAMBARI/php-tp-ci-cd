<?php
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Définition d'une fonction pour afficher le titre de la page
function afficherTitre($titre)
{
    echo "<h1>$titre</h1>";
}

// Définition d'une fonction pour calculer la somme de deux nombres
function calculerSomme($a, $b)
{
    $somme = $a + $b;
    return $somme;
}

// Créer un logger
$log = new Logger('nom');

// Ajouter un gestionnaire de fichier
$log->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log', Logger::WARNING));

afficherTitre('Bienvenue');

// Définition d'un tableau de noms
$noms = array("Anas", "Hamza", "Mariame", "Ziad");

// Parcourir le tableau de noms et afficher chaque nom
foreach ($noms as $nom) {
    echo "Nom : " . $nom . "<br>";
}

// Utilisation d'une condition pour afficher un message différent en fonction de l'heure
$heure = date("H");
if ($heure < "12") {
    echo "Bonjour !";
} else {
    echo "Bon après-midi !";
}

// Écrire un message de journalisation
$log->warning('Un message de test');
