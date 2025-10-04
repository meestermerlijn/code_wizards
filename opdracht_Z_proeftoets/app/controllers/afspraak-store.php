<?php

$request->validate([
    'datum' => 'required', //1p
    'van' => 'required',   //1p
    'tot' => 'required',   //1p
    'klant_id' => 'required', //1p
]);

//database object initialiseren
$db = new Database();

// 3p
$db->query("INSERT INTO afspraken (van, tot, klant_id, opmerking) VALUES (?, ?, ?, ?)", [
    $request->datum . " " . $request->van,
    $request->datum . " " . $request->tot,
    $request->klant_id,
    $request->opmerking,
]);

//1p
flash("Afspraak is gemaakt", true, 3000);

redirect("/afspraak-create");