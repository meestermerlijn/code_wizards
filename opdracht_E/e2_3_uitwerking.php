<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
<?php
$eu_lidstaten = [
    "België" => "BE",
    "Bulgarije" => "BG",
    "Cyprus" => "CY",
    "Denemarken" => "DK",
    "Duitsland" => "DE",
    "Estland" => "EE",
    "Finland" => "FI",
    "Frankrijk" => "FR",
    "Griekenland" => "GR",
    "Hongarije" => "HU",
    "Ierland" => "IE",
    "Italië" => "IT",
    "Kroatië" => "HR",
    "Letland" => "LV",
    "Litouwen" => "LT",
    "Luxemburg" => "LU",
    "Malta" => "MT",
    "Nederland" => "NL",
    "Oostenrijk" => "AT",
    "Polen" => "PL",
    "Portugal" => "PT",
    "Roemenië" => "RO",
    "Slovenië" => "SI",
    "Slowakije" => "SK",
    "Spanje" => "ES",
    "Tsjechië" => "CZ",
    "Zweden" => "SE"
];
?>
<!-- Uitwerking 1 -->
<?php foreach ($eu_lidstaten as $land => $code): ?>
    <p class="flex gap-3"><?= $land ?>  <img src="https://flagsapi.com/<?= $code ?>/flat/64.png"></p>
<?php endforeach; ?>

<!-- Uitwerking 2 -->
<?php
foreach ($eu_lidstaten as $land => $code) {
    echo "<p class=\"flex gap-3\">$land <img src='https://flagsapi.com/$code/flat/64.png'></p>";
}
?>

<!-- Uitwerking 3 -->
<?php // met tailwind opmaak ?>
<?php foreach ($eu_lidstaten as $land => $code): ?>
    <div class="p-2 border border-gray-300 rounded shadow-md w-48 flex items-center gap-2">
        <img src="https://flagsapi.com/<?= $code ?>/flat/64.png" class="w-8 h-6 object-cover">
        <span class="font-medium"><?= $land ?></span>
    </div>
<?php endforeach; ?>
</body>
</html>