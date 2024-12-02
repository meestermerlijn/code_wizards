<?php
view("parts/header", ['title' => 'item ' . $item['naam']]);
view("parts/navigatie-menu");
?>
    <h1 class="text-3xl my-4">Item <?= $item['naam'] ?></h1>

    <p class="my-4">Elke veld van 'item' kan hier nu worden gebruikt<br>
        id: <?= $item['id'] ?><br>
        naam: <?= $item['naam'] ?><br>
        beschrijving: <?= $item['beschrijving'] ?><br>
        prijs: <?= $item['prijs']; ?><br>
    </p>

<?php
view("parts/footer");
