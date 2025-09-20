<?php
view("parts/header", ['title' => 'home']);
view("parts/navigatie-menu");
?>

    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Home</h1>

        <div class="border border-1 rounded p-4 bg-gray-50">
            <h2 class="font-bold"><?= $post['title']; ?></h2>
            <?= $post['content'] ?>
        </div>
    </div>

<?php

$user = (new User)->find(81);
$post = (new Post)->first(1);
dd($post->user());
dd($user->posts()); //geeft de naam van de gebruiker die de post heeft gemaakt

$user = (new User)->find(31);
$user->update([
    'name' => 'Nieuwe naam'
]);

view("parts/footer");
