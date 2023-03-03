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

// Appel de la fonction pour calculer la somme de deux nombres
$resultat = calculerSomme(2, 3);
echo "La somme de 2 et 3 est égale à " . $resultat;

?>







