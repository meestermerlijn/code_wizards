<?php
// validatie van de form
request()->validate([
    'title' => 'required',
    'content' => 'required'
]);

// database object aanmaken
$db = new Database();


// invoeren van de gegevens in de database
$db->query("INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)", [
    'title' => $request->title,
    'content' => $request->content,
    'user_id' => 63, // bij ingelogde gebruiker ipv 63 de id van de ingelogde gebruiker: user()->id
]);


//hier kan je alleen komen als de query goed is uitgevoerd

// doorsturen naar posts pagina (de post is ingevoerd dus gebruiker doorsturen naar andere pagina_
redirect("/posts");

