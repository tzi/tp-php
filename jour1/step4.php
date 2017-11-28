<?php

// Lancé de dé aléatoire
$dice = mt_rand(1, 6);
?>
<form>
    <p>Votre lancé de dé : <?php echo $dice ?></p>
    <button>Relancer le dé</button>
</form>