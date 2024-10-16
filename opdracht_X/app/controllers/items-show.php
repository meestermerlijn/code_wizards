<?php
//initialiseren van database class
$db = new Database();

//view met item teruggegeven
view('items-show', [
    'item' => $db->query("SELECT * FROM items WHERE id=?", [$_GET['id']])->fetch()
]);
