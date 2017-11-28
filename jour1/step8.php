<?php

// Affichage des valeurs envoyés par la validation du formulaire précédent
print_r($_GET);

// Si le joueur souhaite conserver le dé numéro 1 ?
if ( isset($_GET['dice1']) ) {
    // Alors je garde la valeur du dé
    $dice1 = $_GET['dice1'];
} else {
    // Sinon je le relance
    $dice1 = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 2 ?
if ( isset($_GET['dice2']) ) {
    // Alors je garde la valeur du dé
    $dice2 = $_GET['dice2'];
} else {
    // Sinon je le relance
    $dice2 = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 3 ?
if ( isset($_GET['dice3']) ) {
    // Alors je garde la valeur du dé
    $dice3 = $_GET['dice3'];
} else {
    // Sinon je le relance
    $dice3 = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 4 ?
if ( isset($_GET['dice4']) ) {
    // Alors je garde la valeur du dé
    $dice4 = $_GET['dice4'];
} else {
    // Sinon je le relance
    $dice4 = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 5 ?
if ( isset($_GET['dice5']) ) {
    // Alors je garde la valeur du dé
    $dice5 = $_GET['dice5'];
} else {
    // Sinon je le relance
    $dice5 = mt_rand(1, 6);
}
?>
<form>
    <p>Votre lancé de dés : </p>
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