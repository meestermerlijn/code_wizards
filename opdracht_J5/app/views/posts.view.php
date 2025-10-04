<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Posts</h1>
        <!-- Link naar create post van opgave J3.4 -->
        <a href="/posts-create" class="text-indigo-600 hover:text-indigo-400">Nieuwe post</a><br>

        <!-- Zoekformulier van opgave J1.1 -->
        <form action="/posts" method="get">
            <input type="text" id="search" name="q" class="border-1 border-gray-800 rounded-md px-2 py-1" placeholder="Titel...">
            <input type="submit" value="Zoek" class="border-1 border-gray-800 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

        <!-- Loop door posts en toon ze van opgave I2.2 -->
        <?php foreach ($posts as $post): ?>
            <div class="border border-1 rounded p-4 bg-gray-50 my-2">
                <h2 class="font-bold"><?= $post['title']; ?></h2>
                <?= substr($post['content'],0,25) ?><a href="/posts-show/<?= $post['id'] ?>" class="text-indigo-500">...lees meer</a>

                <!-- Opgave J5.1 - verwijderen van een post -->
                <form method="post" action="/posts-destroy/<?= $post['id'] ?>">
                    <?= csrf() ?>
                    <input type="submit" value="Verwijder" name="delete"
                           class="bg-red-600 text-white rounded-md px-2 py-1 hover:bg-red-300 cursor-pointer">
                </form>
            </div>
        <?php endforeach; ?>
    </div>
<?php
view("parts/footer");
