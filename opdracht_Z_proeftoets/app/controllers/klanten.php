<?php
$db = new Database();

$result = $db->query("SELECT * FROM klanten ORDER BY achternaam")->fetchAll();

view('klanten', [
    'klanten' => $result
]);