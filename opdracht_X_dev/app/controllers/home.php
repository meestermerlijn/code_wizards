<?php

$db = new Database();
$post = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 1")->fetch();

view("home", [
    'post' => $post,
]);
?>
<?php if(auth()): ?>
    <p>Goedemorgen, <?= user()->name ?></p>
<?php endif; ?>