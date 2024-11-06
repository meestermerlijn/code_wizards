<?php
//initialiseren van database class
$db = new Database();
$items = $db->query("SELECT * FROM items")->fetchAll();

//view met item teruggegeven
view('items-index', [
    'items' => $items
]);
