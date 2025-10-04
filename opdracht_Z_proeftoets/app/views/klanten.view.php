<?php
view("parts/header", ['title' => 'Klanten']);
view("parts/navigatie-menu");
?>
<div class="sm:mx-10">
    <h1 class="text-3xl my-4">Klanten</h1>

    <form method="get" action="/klanten-edit">
        <select name="klant_id" class="border">
            <?php foreach ($klanten as $klant): ?>
                <option value="<?= $klant['id'] ?>">
                    <?= $klant["voornaam"] . " " . $klant['tussenvoegsel'] . " " . $klant['achternaam'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Klant wijzigen" class="border">
    </form>

    <ul>
        <?php foreach ($klanten as $klant): ?>
            <li>
                <a href="/klanten-edit/<?= $klant['id'] ?>" class="text-indigo-600">
                    <?= $klant["voornaam"] . " " . $klant['tussenvoegsel'] . " " . $klant['achternaam'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php
view("parts/footer");