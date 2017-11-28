<?php

// L'appel à la fonction mt_rand(1, 6) permet de renvoyer un entier entre 1 et 6
// Vous pouvez trouver sa documentation ici : http://php.net/manual/fr/function.mt-rand.php
$dice = mt_rand(1, 6);

// La variable $dice contient alors le résultat d'un lancement de dé, différent à chaque chargement de la page
?>
Votre lancé de dé : <?php echo $dice ?>