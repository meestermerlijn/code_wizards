<?php
$request->validate([
    'foto' => 'required|image' //valide afbeelding
]);


//voeg een upload directory toe aan de configuratie bv:
//$uploadDirectory = config('app.uploadDirectory'); // map waarin de afbeeldingen worden opgeslagen
$uploadDirectory = 'images'; // map waarin de afbeeldingen worden opgeslagen


//uploadFileAs is de naam zoals wij de afbeelding uiteindelijk gaan opslaan
$uploadFileAs = trim($uploadDirectory, '/') .
    '/' .
    hash('sha256', date('YmdHms') . random_int(1, 1000000)) //unieke hash
    . "." . strtolower(pathinfo($request->foto['name'], PATHINFO_EXTENSION)); //extensie van de afbeelding

//verplaatsen naar de juiste map
move_uploaded_file($request->foto["tmp_name"], $uploadFileAs);

//de afbeelding is nu opgeslagen, nu gaan we deze ook in de database opslaan bij de gebruiker
$db = new Database();

$db->query("UPDATE users SET profielfoto=:profielfoto WHERE id=:id", [
    "profielfoto" => $uploadFileAs,
    "id" => user()->id,  // de op dat moment ingelogde gebruiker
]);

flash('success', 'Profielfoto succesvol geüpload!');


//PAS AAN: stuur de gebruiker naar de gewenste pagina
redirect('/');