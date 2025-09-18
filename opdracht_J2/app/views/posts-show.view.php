<?php
view("parts/header", ['title' => 'Bekijk post ' . $post['title']]);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4"><?= $post['title'] ?></h1>
        <p class="my-4"><?= $post['content'] ?></p>
        <p class="italic text-sm">Geschreven door: <?= $post['name'] ?></p>
    </div>

<?php
view("parts/footer");

