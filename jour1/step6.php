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