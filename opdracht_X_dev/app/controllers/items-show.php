<?php
//initialiseren van database class
$db = new Database();
$item = $db->query("SELECT * FROM items WHERE id = ?", [
    $request->id
])->fetch();

//als item niet bestaat
if(!$item){
    abort(404);
}

//view met item teruggegeven
view('items-show', [
    'item' => $item
]);
