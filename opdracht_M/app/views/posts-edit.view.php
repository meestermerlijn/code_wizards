<?php
view("parts/header", ['title' => 'Post wijzigen']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Post wijzigen</h1>
        <form action="/posts-update/<?= $post->id ?>" method="post">
            <?= csrf() ?>
            <input type="text" name="title" value="<?= old('title',$post->title) ?>" placeholder="Titel" class="border-1 rounded-md py-1 px-2" required><br>
            <?php if (errors('title')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('title') ?></p>
            <?php endif; ?>
            <textarea name="content"  placeholder="Content..." class="border-1 rounded-md py-1 px-2 w-100 h-64"><?= old('content',$post->content) ?></textarea><br>
            <?php if (errors('content')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('content') ?></p>
            <?php endif; ?>
            <input type="submit" value="Wijzig" class="border-1 border-gray-800 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
    </div>

<?php
view("parts/footer");

