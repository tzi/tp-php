<?php

$newDraw = true;
$target = 0;
$guess = 50;
$tour = 0;

if ( isset($_GET['target']) ) {
    $target = $_GET['target'];
}

if ( isset($_GET['guess']) ) {
    $guess = $_GET['guess'];
}

if ( isset($_GET['tour']) ) {
    $tour = $_GET['tour'];
}

if ( isset($_GET['target']) ) {
    $tour = $tour + 1;
    $newDraw = false;

    if ( $guess == $target ) {
        echo 'Vous avez trouvé ' . $tour . ' essais.';
        $newDraw = true;
    } else if ( $guess > $target ) {
        echo 'Trop grand !';
    } else {
        echo 'Trop petit !';
    }
}

if ($newDraw) {
    $tour = 0;
    $target = mt_rand(1, 100);
}

?>

<form>
    <input type="hidden" name="tour" value="<?php echo $tour ?>"/>
    <input type="hidden" name="target" value="<?php echo $target ?>"/>
    <input type="number" name="guess" value="<?php echo $guess ?>" />
    <button>Je devine !</button>
</form>