<?php
view("parts/header", ['title' => 'Nieuwe post aanmaken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Nieuwe post maken</h1>

        <!-- Opgave J3.2 - Formulier voor het aanmaken van een nieuwe post -->
        <form action="/posts-store" method="post">
            <?= csrf() ?>
            <input type="text" name="title" placeholder="Titel" class="border-1 rounded-md py-1 px-2" required><br>
            <textarea name="content" placeholder="Content..." class="border-1 rounded-md py-1 px-2"></textarea><br>
            <input type="submit" value="Opslaan" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

    </div>


<?php
view("parts/footer");