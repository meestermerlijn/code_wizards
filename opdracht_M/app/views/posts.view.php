<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Posts</h1>
        <form action="/posts" method="get">
            <input type="text" id="search" name="q" class="border-1 border-gray-800 rounded-md px-2 py-1" placeholder="Titel...">
            <input type="submit" value="Zoek" class="border-1 border-gray-800 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
        <?php foreach ($posts as $post): ?>
            <div class="border border-1 rounded p-4 bg-gray-50 my-2">
                <h2 class="font-bold"><?= $post['title']; ?></h2>
                <?= substr($post['content'],0,25) ?><a href="/posts-show/<?= $post['id'] ?>" class="text-indigo-500">...lees meer</a>

                <div class="flex justify-between mt-4">
                    <form method="get" action="/posts-edit/<?= $post['id'] ?>">
                        <input type="submit" value="Wijzig"
                               class="border-1 border-gray-600 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
                    </form>

                    <?php
                    //Opgave J5.3 - Bevestigingsdialoog voor het verwijderen van een post
                    view("parts/delete-button", [
                        'titel' => 'Post verwijderen',
                        'content' => 'Weet je zeker dat je deze post wilt verwijderen?',
                        'action' => '/posts-destroy/' . $post['id'],
                    ]); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
view("parts/footer");