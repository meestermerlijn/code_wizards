<?php
//valideren of gegevens juist zijn
$request->validate([
    'id' => 'required',
    'title' => 'required',
    'content' => 'required|min:5'
]);

$post = (new Post)->find($request->id);
$post->update([
    'title' => $request->title,
    'content' => $request->content
]);


//succes bericht
flash('Post is gewijzigd');

//redirect naar posts
redirect('/posts');
