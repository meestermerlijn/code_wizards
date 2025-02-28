<?php
view("parts/header", ['title' => 'item toevoegen']);
view("parts/navigatie-menu");
?>
    <h1 class="text-3xl my-4">Item toevoegen</h1>

    <form action="/items" method="post">
        <?= csrf(); ?>
        <label for="naam">Naam</label><br>
        <input type="text" name="naam" id="naam" placeholder="naam" value="<?= old('naam') ?>">
        <br>
        <?php if (errors('naam')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('naam') ?></p>
        <?php endif; ?>

        <label for="beschrijving">Beschrijving</label><br>
        <textarea name="beschrijving" id="beschrijving" cols="30" rows="3" placeholder="beschrijving"><?= old('beschrijving') ?></textarea>
        <br>
        <?php if (errors('beschrijving')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('beschrijving') ?></p>
        <?php endif; ?>

        <label for="prijs">Prijs</label><br>
        <input type="number" step="0.01" name="prijs" id="prijs" placeholder="prijs" value="<?= old('prijs') ?>">
        <br>
        <?php if (errors('prijs')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('prijs') ?></p>
        <?php endif; ?>

        <input type="submit" value="Toevoegen" class="border b-gray-600 rounded py-1 px-2 hover:bg-gray-100 cursor-pointer">

    </form>
<?php
view("parts/footer");
