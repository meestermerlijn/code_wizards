<?php
$request->validate([
    'id' => 'required',
    'voornaam' => 'required|min:2|max:50',
    'achternaam' => 'required|max:50',
    'telefoonnr' => 'max:15',
]);
//database object initialiseren
$db = new Database();

$db->query("UPDATE klanten 
SET voornaam =:voornaam, tussenvoegsel=:tussenvoegsel,achternaam=:achternaam,telefoonnr=:telefoonnr 
WHERE id = :id", [
    'voornaam' => $request->voornaam,
    'achternaam' => $request->achternaam,
    'tussenvoegsel' => $request->tussenvoegsel,
    'telefoonnr' => $request->telefoonnr,
    'id' => $request->id
]);

flash('Klant gegevens gewijzigd');

redirect('/klanten');