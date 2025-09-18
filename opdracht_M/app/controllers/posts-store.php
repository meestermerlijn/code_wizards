<?php
// validatie van de form
use Post\Post;

$request->validate([
    'title' => 'required',
    'content' => 'required'
]);

(new Post)->create([
    'title' => $request->title,
    'content' => $request->content,
    'user_id' => user()->id
]);


//Opgave J4.1 - Toast message dat post is opgeslagen
flash("Post is opgeslagen", true, 3000);


// doorsturen naar posts pagina (de post is ingevoerd dus gebruiker doorsturen naar andere pagina_
redirect("/posts");

