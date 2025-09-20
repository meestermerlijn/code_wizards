<?php
// stap 1 valideren of de id bestaat
$request->validate([
    'id' => 'required'
]);

// post ophalen
$post = (new Post)->find($request->id);


// stap 4 controleren of de post bestaat
if(!$post) {
    abort(404);
}

// stap 5 post meegeven aan de view
view("posts-show", [
    'post' => $post
]);