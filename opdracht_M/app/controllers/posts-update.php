<?php
//valideren of gegevens juist zijn
use Post\Post;

$request->validate([
    'id' => 'required',
    'title' => 'required|length:3,255',
    'content' => 'required|min:3'
]);

//post ophalen
$post = (new Post)->find($request->id);
//als post niet bestaat
if (!$post) {
    abort(404);
}

// Kiezen uit 2 opties om post te updaten

//Optie 1
$post->title = $request->title;
$post->content = $request->content;
$post->save();

// Optie 2
$post = $post->update([
    'title' => $request->title,
    'content' => $request->content
]);

//succes bericht
flash('Post succesvol gewijzigd');

//redirect naar posts
redirect('posts');
