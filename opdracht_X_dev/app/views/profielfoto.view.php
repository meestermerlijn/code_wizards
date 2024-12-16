<?php
view("parts/header", ['title' => 'profielfoto']);
view("parts/navigatie-menu");
?>
<?php if (auth()): //dit wil je alleen kunnen als je ingelogd bent ?>

    <div class="m-10">
    <form action="/profielfoto" method="post" enctype="multipart/form-data">
        <?= csrf() ?>
        Selecteer een profielfoto:<br>
        <input type="file" name="foto" id="foto">
        <!-- om eventuele errors te tonen -->
        <?php if (errors('foto')): ?>
            <p class="text-red-500 text-sm my-2"><?= errors('foto') ?></p>
        <?php endif; ?>
        <br>
        <input type="submit" value="Upload profielfoto" name="submit" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
    </form>
    </div>
<?php endif; ?>
<?php
view("parts/footer");