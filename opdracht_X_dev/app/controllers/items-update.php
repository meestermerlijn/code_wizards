<?php
$request->validate([
    'naam' => 'required|max:50',
    'prijs' => 'required|numeric|between:0.01,1000000',
    'beschrijving' => 'required',
]);


//wijzigen doorvoeren
$db = new Database();
$db->query("UPDATE items SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs WHERE id = :id", [
    'naam' => $request->naam,
    'beschrijving' => $request->beschrijving,
    'prijs' => $request->prijs,
    'id' => $request->id
]);

flash("Item " . htmlspecialchars($request->naam) . " is gewijzigd");
//terugsturen naar de detailpagina van het item
redirect("/items/" . $request->id);
