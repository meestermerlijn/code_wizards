<?php
//validatie van de gegevens
$request->validate([
    'naam' => 'required|length:0,50',
    'prijs' => 'required|numeric|between:0.01,1000000'
]);
//voor alle validatie regels zie cheat-sheet

//indien validatie oké dan gegevens opslaan in de database
$db = new Database();
$db->query("INSERT INTO items (naam, beschrijving, prijs) VALUES (:naam, :beschrijving, :prijs)", [
    'naam' => $request->naam,
    'beschrijving' => $request->beschrijving,
    'prijs' => $request->prijs,
]); //id veld staat op auto increment dus hoeft niet meegegeven te worden

flash("Item " . $request->naam . " is toegevoegd");

//terugsturen naar de index pagina
redirect("/items");

//terugsturen naar de detail pagina van het item
//redirect("/items-show/" . $db->lastInsertId());

