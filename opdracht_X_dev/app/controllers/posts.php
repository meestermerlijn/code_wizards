<?php
$db = new Database();

//controlleer of er een zoekopdracht is
if($request->q??false) {
    //Er is een zoekopdracht, dus haal de posts op die overeenkomen met de zoekopdracht
    $posts = $db->query("SELECT * FROM posts WHERE title LIKE :q OR content LIKE :q", [
        'q' => "%$request->q%"
    ])->fetchAll();
}else{
    //Er is geen zoekopdracht, dus haal alle posts op
    $posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
}


view("posts", [
    'posts' => $posts //alle posts doorgeven aan de view
]);

