<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Posts</h1>
        <?php if (auth()): ?>
            <a href="/posts-create" class="text-indigo-600 hover:text-indigo-400">Nieuwe post</a><br>
        <?php endif; ?>
        <form action="/posts" method="get">
            <input type="text" id="search" name="q" class="border border-1 rounded-md px-2 py-1">
            <input type="submit" value="Zoek" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
        <?php
        foreach ($posts as $post) {
            ?>
            <div class="border border-1 rounded p-4 bg-gray-50">
                <h2 class="font-bold"><?= $post['title']; ?></h2>
                <?= $post['content'] ?>

                <?php if (auth()): // alleen als je ingelogd bent?>

                    <div class="flex justify-between mt-4">
                        <?php if (user()->id == $post['user_id'] or hasRole('admin')): //als jij de schrijver van de post of admin bent ?>
                            <form method="get" action="/posts-edit/<?= $post['id'] ?>">
                                <input type="submit" value="Wijzig"
                                       class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
                            </form>
                        <?php endif; ?>
                        <?php if (hasRole('admin')): //als jij admin bent ?>
                            <form method="post" action="/posts-destroy/<?= $post['id'] ?>">
                                <input type="submit" value="Verwijder" name="delete"
                                       class="border bg-red-600 text-white rounded-md px-2 py-1 hover:bg-red-300 cursor-pointer">
                            </form>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php } ?>
    </div>
<?php
view("parts/footer");
