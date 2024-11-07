<?php
//valideren of gegevens juist zijn
$request->validate([
    'id' => 'required',
    'title' => 'required',
    'content' => 'required'
]);

//database object aanmaken
$db = new Database();

//query om post te updaten
$db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id", [
    'id' => $request->id,
    'title' => $request->title,
    'content' => $request->content
]);

//succes bericht
flash('Post is gewijzigd');

//redirect naar posts
redirect('posts');
