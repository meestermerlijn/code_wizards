<?php
view("parts/header", ['title' => 'item wijzigen']);
view("parts/navigatie-menu");
?>
    <h1 class="text-3xl my-4">Item <?= $item['naam'] ?> wijzigen</h1>

    <form action="/items-update/<?= $item['id'] ?>" method="post">
        <?= csrf(); ?>
        <label for="naam">Naam</label><br>
        <input type="text" name="naam" id="naam" placeholder="naam" value="<?= old('naam', $item['naam']) ?>">
        <?php if (errors('naam')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('naam') ?></p>
        <?php endif; ?>
        <br>

        <label for="beschrijving">Beschrijving</label><br>
        <textarea name="beschrijving" id="beschrijving" cols="30" rows="3" placeholder="beschrijving"><?= old('beschrijving', $item['beschrijving']) ?></textarea>
        <?php if (errors('beschrijving')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('beschrijving') ?></p>
        <?php endif; ?>
        <br>

        <label for="prijs">Prijs</label><br>
        <input type="number" step="0.01" name="prijs" id="prijs" placeholder="prijs" value="<?= old('prijs', $item['prijs']) ?>">
        <?php if (errors('prijs')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('prijs') ?></p>
        <?php endif; ?>
        <br>

        <input type="submit" value="Wijzigen" class="border b-gray-600 rounded py-1 px-2 hover:bg-gray-100 cursor-pointer">
    </form>
<?php
view("parts/footer");