<?php
view("parts/header", ['title' => 'Klant wijzigen']);
view("parts/navigatie-menu");
?>
<div class="sm:mx-10">
    <h1 class="text-3xl my-4">Klant wijzigen</h1>


    <form action="/klanten-update/<?= $klant['id'] ?>" method="post">
        <?= csrf() ?>
        <input type="text" name="voornaam" placeholder="Voornaam" value="<?= old('voornaam', $klant['voornaam']) ?>"
            class="border"><br>
        <?php if (errors('voornaam')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('voornaam') ?></p>
        <?php endif; ?>

        <input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel"
            value="<?= old('tussenvoegsel', $klant['tussenvoegsel']) ?>" class="border"><br>

        <input type="text" name="achternaam" placeholder="Achternaam"
            value="<?= old('achternaam', $klant['achternaam']) ?>" class="border"><br>
        <?php if (errors('achternaam')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('achternaam') ?></p>
        <?php endif; ?>

        <input type="text" name="telefoonnr" placeholder="Telefoonnr"
            value="<?= old('telefoonnr', $klant['telefoonnr']) ?>" class="border"><br>

        <input type="submit" value="Opslaan" class="border">
    </form>


</div>
<?php
view("parts/footer");