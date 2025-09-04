<h2>Voorbeeld 1</h2>
<?php
$uur = 10;

if ($uur < 12) {
    echo "Goedemorgen!";
} else {
    echo "Goedemiddag!";
}
?>

<h2>Voorbeeld 2</h2>
<?php

if( isset($_GET['veld']) ){
    //...
}

//of

if( $_GET != null ){
    //...
}
?>

<h2>Voorbeeld 3</h2>
<h1><?= ($leeftijd<18) ? "Geen toegang" : "Toegang" ?></h1>

<h2>Voorbeeld 4</h2>
<?php if(true): ?>
    <p>Dit is waar</p>
<?php else: ?>
    <p>Dit is onwaar</p>
<?php endif; ?>