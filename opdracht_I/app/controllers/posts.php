<?php
$db = new Database();
//alle posts ophalen, nieuwste eerst
$posts= $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();

view("posts", [
    'posts' => $posts
]);