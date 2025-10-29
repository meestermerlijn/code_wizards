<?php
view("parts/header", ['title' => 'Post wijzigen']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Post wijzigen</h1>
        <form action="/posts-update/<?= $post['id']?>" method="post">
            <?= csrf() ?>
            <!-- bij een input veld staat de waarde in het value attribuut -->
            <input type="text" name="title" value="<?= $post['title']?>" placeholder="Titel" class="border-1 rounded-md py-1 px-2" required><br>
            <!-- bij een textarea moet de waarde tussen de opening en sluiting tags staan -->
            <textarea name="content" placeholder="Content..." class="border-1 rounded-md py-1 px-2"><?= $post['content']?></textarea><br>
            <input type="submit" value="Wijzig" class="border-1 border-gray-800 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
    </div>

<?php
view("parts/footer");

