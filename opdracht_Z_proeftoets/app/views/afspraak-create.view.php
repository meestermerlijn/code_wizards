<?php
view("parts/header", ['title' => 'home']);
view("parts/navigatie-menu");
?>

<select name="user_id">
    <option value="1">Henk</option>
    <option value="2">Piet</option>
    <option value="3">Klaas</option>
</select>

    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Empty project</h1>

        <div class="border border-1 rounded p-4 bg-gray-50 my-4">
            <form method="post" action="/do-iets-store">
                <?=csrf()?>
                <select name="user_id">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>
    </div>
<?php
view("parts/footer");