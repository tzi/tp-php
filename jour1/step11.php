<?php

// Déclaration d'un tableau de dé
$dice = array();

// Si le joueur souhaite conserver le dé numéro 1 ?
if ( isset($_GET['dice1']) ) {
    // Alors je garde la valeur du dé
    $dice[1] = $_GET['dice1'];
} else {
    // Sinon je le relance
    $dice[1] = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 2 ?
if ( isset($_GET['dice2']) ) {
    // Alors je garde la valeur du dé
    $dice[2] = $_GET['dice2'];
} else {
    // Sinon je le relance
    $dice[2] = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 3 ?
if ( isset($_GET['dice3']) ) {
    // Alors je garde la valeur du dé
    $dice[3] = $_GET['dice3'];
} else {
    // Sinon je le relance
    $dice[3] = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 4 ?
if ( isset($_GET['dice4']) ) {
    // Alors je garde la valeur du dé
    $dice[4] = $_GET['dice4'];
} else {
    // Sinon je le relance
    $dice[4] = mt_rand(1, 6);
}

// Si le joueur souhaite conserver le dé numéro 5 ?
if ( isset($_GET['dice5']) ) {
    // Alors je garde la valeur du dé
    $dice[5] = $_GET['dice5'];
} else {
    // Sinon je le relance
    $dice[5] = mt_rand(1, 6);
}
?>
<form>
    <p>Votre lancé de dés : </p>
    <ul>
        <?php foreach ($dice as $diceNumber => $diceValue) { ?>
            <li>
                <input
                    type="checkbox"
                    name="dice<?php echo $diceNumber ?>"
                    value="<?php echo $diceValue ?>"
                    <?php if ( isset($_GET['dice' . $diceNumber]) ) { echo 'checked'; } ?>
                >
                <?php echo $diceValue; ?>
            </li>
        <?php } ?>
    </ul>
    <button>Relancer les dés</button>
</form>