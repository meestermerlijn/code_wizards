<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Opgave E2.1</title>
</head>
<body>
<?php
$colors = ['red', 'blue', 'green', 'yellow', 'purple'];
?>
<?php foreach ($colors as $color): ?>
    <div class="p-2 text-<?= $color ?>-600">
        This is <?= $color ?>.
    </div>
<?php endforeach; ?>
</body>
</html>