<?php
// valideren of id wel bestaat
$request->validate([
    'id' => 'required'
]);

// database object aanmaken
$db = new Database();

// query om post op te halen
$post = $db->query("SELECT * FROM posts WHERE id = :id", [
    'id' => $request->id
])->fetch();

// als post niet bestaat
if(!$post){
    abort(404);
}

// view met post teruggegeven
view('posts-edit', [
    'post' => $post
]);
