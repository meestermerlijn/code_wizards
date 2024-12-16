<?php

//gegevens uit database ophalen
$db = new Database();

$users = $db->query("SELECT * FROM users ORDER BY name")->fetchAll();

//aan de view de gegevens doorgeven
view('admin-users',[
    'users' => $users
]);