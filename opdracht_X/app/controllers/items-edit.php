<?php
$request->validate([
    'id' => 'required'
]);

$db = new Database();

view('items-edit', [
    'item' => $db->query("SELECT * FROM items WHERE id=:id", [
        "id"=>$request->id
    ])->fetch()
]);