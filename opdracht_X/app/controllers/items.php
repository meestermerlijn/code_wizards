<?php
//initialiseren van database class
$db = new Database();

//view met item teruggegeven
view('items-index', [
    'items' => $db->query("SELECT * FROM items ORDER BY naam")->fetchAll()
]);
