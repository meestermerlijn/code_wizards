<?php
//validate id
$request->validate([
    'id' => 'required'
]);

//initialiseren van database class
$db = new Database();

//view met item teruggegeven
view('items-show', [
    'item' => $db->query("SELECT * FROM items WHERE id = :id", [
        "id" => $request->id
    ])->fetch()
]);
