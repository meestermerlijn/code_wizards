<?php
//gegevens uit database ophalen (1pt)
$db = new Database();
$klanten = $db->query("SELECT * FROM klanten")->fetchAll();

view('afspraak-create', [
    'klanten' => $klanten //gegevens aan view meegeven (1pt)
]);