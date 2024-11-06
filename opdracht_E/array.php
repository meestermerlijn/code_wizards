<h2>Voorbeeld 1</h2>
<?php
$kleuren = ["rood", "groen", "blauw"];
echo "De eerste kleur is: " . $kleuren[0]."<br>";
echo "De tweede kleur is: " . $kleuren[1]."<br>";
echo "De derde kleur is: " . $kleuren[2]."<br>";
?>

<h2>Voorbeeld 2</h2>
<?php
$leeftijd = ["Jan" => 25, "Els" => 30, "Klaas" => 22];
echo "De leeftijd van Jan is: " . $leeftijd['Jan'];
?>

<h2>Voorbeeld 3</h2>
<?php
$dieren = ["kat", "hond", "vogel"];

foreach ($dieren as $dier) {
    echo "Een " . $dier . "<br>";
}
?>

<h2>Voorbeeld 4</h2>
<?php
$dieren = ["kat", "hond", "vogel"];
?>

<?php foreach ($dieren as $dier): ?>
    Een <?= $dier ?><br>
<?php endforeach ?>
