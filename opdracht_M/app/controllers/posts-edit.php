<?php
// valideren of id wel bestaat
use Post\Post;

$request->validate([
    'id' => 'required'
]);

// post ophalen
$post = (new Post)->find($request->id);


// als post niet bestaat
if(!$post){
    abort(404);
}

// view met post teruggegeven
view('posts-edit', [
    'post' => $post
]);