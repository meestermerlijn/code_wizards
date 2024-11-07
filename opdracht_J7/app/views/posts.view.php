<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Posts</h1>
        <form action="/posts" method="get">
            <input type="text" id="search" name="q" class="rounded-md">
            <input type="submit" value="Zoek"
                   class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
        <?php foreach ($posts as $post): ?>
            <div class="border border-1 rounded p-4 bg-gray-50">
                <h2 class="font-bold"><?= $post['title']; ?></h2>
                <?= $post['content'] ?>
                <form method="post" action="/posts-destroy/<?= $post['id'] ?>">
                    <input type="submit" value="Verwijder" name="delete"
                           class="border bg-red-600 text-white rounded-md px-2 py-1 hover:bg-red-300 cursor-pointer">
                </form>
            </div>
        <?php endforeach; ?>
    </div>
<?php
view("parts/footer");