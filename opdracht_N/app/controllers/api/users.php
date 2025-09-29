<?php
$request->validate([
    'name' => 'required'
]);

//gebruik van database object
$db = new Database();

//users opzoeken die aan onze zoek query voldoen en deze in $users zetten
$users = $db->query(
    "SELECT id, name, email 
           FROM users 
           WHERE name LIKE :name
          LIMIT 10", [
    "name" => "%" . $request->name . "%"  //zoeken naar alles wat er op lijkt
] //we hebben twee plekken waar we $name in moeten vullen
)->fetchAll();

// het resultaat geven we terug in json formaat
echo json_encode($users);