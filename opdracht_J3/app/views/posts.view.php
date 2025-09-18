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
            <input type="text" id="search" name="q" class="border border-1 rounded-md px-2 py-1" placeholder="Titel...">
            <input type="submit" value="Zoek" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

        <!-- Loop door posts en toon ze van opgave I2.2 -->
        <?php foreach ($posts as $post): ?>
            <div class="border border-1 rounded p-4 bg-gray-50 my-2">
                <h2 class="font-bold"><?= $post['title']; ?></h2>
                <?= $post['content'] ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php
view("parts/footer");
