<?php

// $_GET est une variable réservé par PHP, c'est à dire que sa déclaration est automatique.
// La variable $_GET contient les valeurs du formulaire validé sur la page précédente.
// On peut trouver sa documentation ici : http://php.net/manual/fr/reserved.variables.get.php

// L'affichage de la variable à l'aide de l'instruction echo affiche seulement 'Array'.
// Cela nous indique qu'il s'agit d'un tableau, rien sur ce qu'il y a à l'intérieur
echo $_GET;

// Sautons une ligne pour voir la différence avec la prochaine instruction
echo '<br>';

// L'affichage de la variable à l'aide de la fonction print_r() est plus utile
print_r($_GET);

// Lancé de 3 dés aléatoirement
$dice1 = mt_rand(1, 6);
$dice2 = mt_rand(1, 6);
$dice3 = mt_rand(1, 6);
$dice4 = mt_rand(1, 6);
$dice5 = mt_rand(1, 6);
?>
<form>
    <p>Vous avez lancé 3 dés : </p>
    <ul>
        <li>
            <input type="checkbox" name="dice1" value="<?php echo $dice1 ?>">
            <?php echo $dice1 ?>
        </li>
        <li>
            <input type="checkbox" name="dice2" value="<?php echo $dice2 ?>">
            <?php echo $dice2 ?>
        </li>
        <li>
            <input type="checkbox" name="dice3" value="<?php echo $dice3 ?>">
            <?php echo $dice3 ?>
        </li>
        <li>
            <input type="checkbox" name="dice4" value="<?php echo $dice4 ?>">
            <?php echo $dice4 ?>
        </li>
        <li>
            <input type="checkbox" name="dice5" value="<?php echo $dice5 ?>">
            <?php echo $dice5 ?>
        </li>
    </ul>
    <button>Relancer les dés</button>
</form>