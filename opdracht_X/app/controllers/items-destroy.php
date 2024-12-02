<?php
$request->validate([
    'id' => 'required'
]);

$db = new Database();

$db->query("DELETE FROM items WHERE id = :id", [
    'id' => $_POST['id']
]);

flash("Item is verwijderd");

redirect("/items");