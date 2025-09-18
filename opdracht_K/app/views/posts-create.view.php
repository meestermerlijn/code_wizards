<?php
view("parts/header", ['title' => 'Nieuwe post aanmaken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Nieuwe post maken</h1>

        <!-- Opgave J3.2 - Formulier voor het aanmaken van een nieuwe post -->
        <form action="/posts-store" method="post">
            <?= csrf() ?>
            <input type="text" name="title" placeholder="Titel" value="old('title')" class="border-1 rounded-md py-1 px-2" required>
            <?php if (errors('title')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('title') ?></p>
            <?php endif; ?>
            <textarea name="content" placeholder="Content..." value="old('content')" class="border-1 rounded-md py-1 px-2"></textarea>
            <?php if (errors('content')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('content') ?></p>
            <?php endif; ?>
            <input type="submit" value="Opslaan" class="border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

    </div>


<?php
view("parts/footer");