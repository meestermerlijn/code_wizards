<?php
view("parts/header", ['title' => 'Post wijzigen']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Post wijzigen</h1>
        <form action="/posts-update/<?= $post['id']?>" method="post">
            <?= csrf() ?>
            <input type="text" name="title" value="<?= $post['title']?>" placeholder="Titel" required><br>
            <textarea name="content" value="<?= $post['content']?>" placeholder="Content..."></textarea><br>
            <input type="submit" value="Wijzig" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
    </div>

<?php
view("parts/footer");

