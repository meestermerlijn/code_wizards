<?php
//validatie van de gegevens
$request->validate([
    'naam' => 'required|length:0,50',
    'prijs' => 'required|numeric|between:0.01,1000000'
]);

//wijzigen doorvoeren
$db = new Database();
$db->query("UPDATE items SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs WHERE id = :id", [
    'naam' => $request->naam,
    'beschrijving' => $request->beschrijving,
    'prijs' => $request->prijs,
    'id' => $request->id,
]);

flash("Item " . $request->naam . " is gewijzigd");
//terugsturen naar de detail pagina van het item
redirect("/items/" . $request->id);
