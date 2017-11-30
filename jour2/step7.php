<?php

$newDraw = true;
$target = 0;
$guess = 0;

if ( isset($_GET['target']) ) {
    $target = $_GET['target'];
}

if ( isset($_GET['guess']) ) {
    $guess = $_GET['guess'];
}

if ( isset($_GET['target']) ) {
    if ( $guess == $target ) {
        echo 'Vous avez trouvé le bon nombre !';
    } else {
        echo 'Perdu !';
        $newDraw = false;
    }
}

if ($newDraw) {
    $target = mt_rand(1, 5);
}

?>

<form>
    <input type="hidden" name="target" value="<?php echo $target ?>"/>
    <input type="number" name="guess" value="<?php echo $guess ?>" />
    <button>Je devine !</button>
</form>