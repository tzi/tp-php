<?php

if ( isset($_GET['guess']) ) {
    echo $_GET['guess'];
}

?>

<form>
    <input type="number" name="guess" />
    <button>Je devine !</button>
</form>