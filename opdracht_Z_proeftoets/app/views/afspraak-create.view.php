<?php
view("parts/header", ['title' => 'Afspraak maken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Afspraak maken</h1>

        <div class="border border-1 rounded p-4 bg-gray-50 my-4">

            <!-- Form post (1p) csrf (1p) gebruik old(..) (2p) tonen van fouten (3p) -->
            <form action="/afspraak-store" method="post">
                <?= csrf() ?>
                <!-- selectbox uit database 4pt-->
                <select name="klant_id" class="border">
                    <?php foreach ($klanten as $klant): ?>
                        <option <?= ($klant['id'] == old('klant_id') ? 'selected' : '') ?> value="<?= $klant['id'] ?>">
                            <?= $klant['voornaam'] ?>     <?= $klant['tussenvoegsel'] ?>
                            <?= $klant['achternaam'] ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                Datum
                <input type="date" class="border" name="datum" placeholder="Datum" value="<?= old('datum') ?>"><br><!-- 1p -->
                <?php if (errors('datum')): ?>
                    <p class="text-red-500 text-sm my-2"><?= errors('datum') ?></p>
                <?php endif; ?>
                Van tijd<input type="time" class="border" name="van" placeholder="van" value="<?= old('van') ?>"><br><!-- 1p -->
                <?php if (errors('van')): ?>
                    <p class="text-red-500 text-sm my-2"><?= errors('van') ?></p>
                <?php endif; ?>
                Tot tijd<input type="time" class="border" name="tot" placeholder="Tot" value="<?= old('tot') ?>"><br><!-- 1p -->
                <?php if (errors('tot')): ?>
                    <p class="text-red-500 text-sm my-2"><?= errors('tot') ?></p>
                <?php endif; ?>
                <textarea name="opmerking" class="border" placeholder="Opmerkingen"><?=old('opmerking')?></textarea><br><!-- 2p -->
                <input type="submit" class="border" value="Opslaan"><!-- 1p -->
            </form>
        </div>
    </div>
<option value="1" selected>Piet</option>
<?php
view("parts/footer");