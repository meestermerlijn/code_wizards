<?php
//database object initialiseren
$db = new Database();

//query uitvoeren (met meerdere resultaten) en opslaan in een variabele $result (array)
$result = $db->query("SELECT afspraken.id, van, tot, voornaam, tussenvoegsel, achternaam 
                        FROM afspraken, klanten 
                        WHERE afspraken.klant_id=klanten.id AND van LIKE ? 
                        ORDER BY van", [
    $request->datum ?? '' . "%"
])->fetchAll();

view('afspraken', [
    'afspraken' => $result
]);