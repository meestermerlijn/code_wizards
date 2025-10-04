<?php
$request->validate([
    'id' => 'required'
]);

//database object initialiseren
$db = new Database();

$db->query("DELETE FROM afspraken WHERE id = ?", [
    $request->id
]);

flash('Afspraak verwijderd');

redirect('/afspraken');