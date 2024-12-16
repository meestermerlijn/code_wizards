<?php
view("parts/header", ['title' => 'Post wijzigen']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Post wijzigen</h1>
        <form action="/posts-update/<?= $post['id']?>" method="post">
            <?= csrf() ?>
            <input type="text" name="title" placeholder="Titel" value="<?= old('title',$post['title']) ?>" required>
            <?php if (errors('title')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('title') ?></p>
            <?php endif; ?>
            <br>
            <textarea name="content" placeholder="Content..."><?= old('content',$post['content']) ?></textarea>
            <?php if (errors('content')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('content') ?></p>
            <?php endif; ?>
            <br>
            <input type="submit" value="Wijzig" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>
    </div>
<?= user()->email ?>
<?php
view("parts/footer");