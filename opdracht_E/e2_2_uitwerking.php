<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Opgave E2.2</title>
</head>
<body>
<p>Maak een keuze:</p>
<form method="get">
    <input type="radio" name="keuze" value="ja">Ja</input>
    <input type="radio" name="keuze" value="nee">Nee</input>
    <br>
    <button type="submit" class="border border-gray-300 rounded bg-gray-200 hover:bg-gray-400 px-2 cursor-pointer shadow-md">Verzenden</button>
</form>

<?php if(isset($_GET['keuze'])): ?>

    <?php if($_GET['keuze'] === 'ja'): ?>
        <p>Jouw keuze is 'ja'</p>
    <?php else: ?>
        <p>Jouw keuze is 'Nee'</p>
    <?php endif; ?>

<?php endif; ?>
</body>
</html>