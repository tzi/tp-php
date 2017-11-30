<?php

$target = mt_rand(1, 3);

if ( isset($_GET['guess']) ) {
    if ( $_GET['guess'] == $target ) {
        echo 'Vous avez trouvé le bon nombre !';
    } else {
        echo 'Perdu !';
    }
}

?>

<form>
    <input type="number" name="guess" />
    <button>Je devine !</button>
</form>