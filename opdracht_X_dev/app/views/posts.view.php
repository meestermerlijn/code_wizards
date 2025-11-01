<?php
view("parts/header", ['title' => 'Alle posts']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Posts</h1>

        <!-- Zoekformulier van opgave J1.1 -->
        <form action="/posts" method="get">
            <input type="text" id="search" name="q" class="border border-1 rounded-md px-2 py-1" placeholder="Titel...">
            <input type="submit" value="Zoek"
                   class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        </form>

        <!-- Loop door posts en toon ze van opgave I2.2 -->
        <?php foreach ($posts as $post): ?>
        <div class="border border-1 rounded p-4 bg-gray-50 my-2">
            <h2 class="font-bold"><?= $post['title']; ?></h2>
            <?= substr($post['content'], 0, 25) ?><a href="/posts-show/<?= $post['id'] ?>" class="text-indigo-500">...lees
                meer</a>
        </div>
        <?php endforeach; ?>
        <?php
view('forms.button', [
    'text'=> 'Verstuur',    // optional
    'type'=> 'button',      // optional, default is 'submit'
]);

        ?>


        <br><br>
    </div>
<div class="sm:mx-10">
    <form method="post" action="/post-store">

<?php
view('forms.input', [
    'label'=> '...',
    'name'=> '...',
    'type'=> 'text'
]);
?>

        <

        br>
        <input type="submit" value="Opslaan" name="save" class="border px-2 py-1 bg-gray-200 hover:bg-gray-100 cursor-pointer">
    </form>




<?php
view('/forms/button', [
    'text'=> 'Zoek',
    'type'=> 'button',
]);
?></div><?php
view("parts/footer");