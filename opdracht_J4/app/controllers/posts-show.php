<?php
// stap 1 valideren of de id bestaat
$request->validate([
    'id' => 'required'
]);

// stap 2 database Object aanmaken
$db = new Database();

// stap 3 query uitvoeren
$post = $db->query("SELECT posts.*, users.name FROM posts, users WHERE posts.user_id = users.id AND posts.id = :id", [
    'id' => $request->id
])->fetch();

// stap 4 controleren of de post bestaat
if(!$post) {
    abort(404);
}

// stap 5 post meegeven aan de view
view("posts-show", [
    'post' => $post
]);