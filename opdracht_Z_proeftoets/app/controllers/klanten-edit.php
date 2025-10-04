<?php
$request->validate([
    'id' => 'required'
]);

$db = new Database();

$result = $db->query("SELECT * FROM klanten WHERE id=?", [
    $request->id
])->fetch();

view('klanten-edit', [
    'klant' => $result
]);

