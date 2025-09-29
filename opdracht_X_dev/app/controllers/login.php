<?php
$request->validate([
    'email' => ['required', 'email'],
    'password' => ['required']
]);

$db = new Database();

//gebruiker ophalen uit de database
$user = $db->query("SELECT * FROM users WHERE email = ? LIMIT 1", [
    $request->email
])->fetch();

//als er een gebruiker is gevonden
if ($user) {
    //wachtwoord controleren
    if (password_verify($_POST['password'], $user['password'])) {

        //gebruiker in session zetten, maar het wachtwoord laten we weg
        unset($user['password']);
        $_SESSION['user'] = $user;

        flash("Welkom terug " . $user['name'], true);
        //doorsturen naar de home pagina (of pas aan
        redirect("/");
    } else {
        $_SESSION['errors']['login'] = "Inloggegevens zijn niet correct";
    }
} else {
    $_SESSION['errors']['login'] = "Inloggegevens zijn niet correct";
}

// inloggen is niet gelukt, terug naar login pagina
view("login");