<?php
$db = new Database();

if(isset($request->q)) {
    $posts = $db->query("SELECT * FROM posts WHERE title LIKE :q OR content LIKE :q", [
        'q' => "%$request->q%"
    ])->fetchAll();
}else{
    $posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
}


view("posts", [
    'posts' => $posts
]);

