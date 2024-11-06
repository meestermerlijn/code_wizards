<?php
$db = new Database();

// Get the item from the database
$item = $db->query("SELECT * FROM items WHERE id=?", [
    $request->id
])->fetch();

// If the item does not exist
if(!$item){
    abort(404);
}

// Return the view with the item
view('items-edit', [
    'item' => $item
]);