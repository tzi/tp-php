<?php

// Lancé de 5 dés aléatoirement
$dice1 = mt_rand(1, 6);
$dice2 = mt_rand(1, 6);
$dice3 = mt_rand(1, 6);
$dice4 = mt_rand(1, 6);
$dice5 = mt_rand(1, 6);
?>
<form>
    <p>Votre lancé de dés : </p>
    <ul>
        <li><?php echo $dice1 ?></li>
        <li><?php echo $dice2 ?></li>
        <li><?php echo $dice3 ?></li>
        <li><?php echo $dice4 ?></li>
        <li><?php echo $dice5 ?></li>
    </ul>
    <button>Relancer les dés</button>
</form>