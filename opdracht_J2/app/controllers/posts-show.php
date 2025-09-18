<?php
//Opgave J2.1

// stap 1 valideren of de id bestaat
$request->validate([
    'id' => 'required'
]);

// stap 2 database Object aanmaken
$db = new Database();

// stap 3 query uitvoeren
// Opgave J2.2 - join met users tabel om naam van gebruiker te tonen. Let op dat je tabellen aan elkaar koppelt met de user_id
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