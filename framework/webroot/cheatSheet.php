<?php
//Let op in onderstaande code wordt ervan uitgegaan dat in de index.php de volgende code staat:
session_start();
$config = require __DIR__ . "/../app/config.php";

//request class
require __DIR__ . "/../src/Request.php";

//handige functies
require __DIR__ . "/../src/functions.php";

//Database class
require __DIR__ . "/../src/Database.php";

//csrf protection
require __DIR__ . "/../src/csrf.php";

//routes
require __DIR__ . "/../app/router.php";

////////////////////////////////////////
/// PHP code //////////////////////////
///////////////////////////////////////

//variabele aanmaken
$naam = "Maurice";

//variabele tonen
echo $naam;

//variabele tonen met html
echo "<h1>" . $naam . "</h1>";

//variabele tonen met html (kortere versie)
echo "<h1>$naam</h1>";

//variabele tonen met html (kortere versie)
echo "<h1>{$naam}</h1>";

//variabele tonen met html (kortere versie)
?>
    <div>
        <h1><?= $naam ?></h1>
    </div>
<?php

//array aanmaken
$namen = ["Maurice", "John", "Ben"];

//variabele uit array tonen (eerste element)
echo $namen[0];

//key value array aanmaken
$docent = [
    "voornaam" => "Maurice",
    "achternaam" => "Merlier",
    "leeftijd" => 45
];

//variabele uit array tonen (eerste element)
echo $docent["voornaam"];

//array met meerdere arrays
$docenten = [
    [
        "voornaam" => "Maurice",
        "achternaam" => "Merlier",
        "leeftijd" => 45
    ],
    [
        "voornaam" => "Michael",
        "achternaam" => "Johnson",
        "leeftijd" => 22
    ],
];

//variabele uit array tonen (eerste element)
echo $docenten[0]["voornaam"];

//loop door een array met foreach
foreach ($docenten as $docent) {
    echo $docent["voornaam"] . "<br>";
}

//loop door een array binnen html
?>
    <ul>
        <?php foreach ($docenten as $docent): ?>
            <li><?= $docent["voornaam"] ?></li>
        <?php endforeach; ?>
    </ul>
<?php

/////////////////////////////////////////////////
/// PHP functies ////////////////////////////////
/////////////////////////////////////////////////
// Hieronder een aantal veel gebruikte php functies

// lengte van een string: strlen($var)
$naam = "Maurice";
echo strlen($naam); //geeft 7

// string omzetten naar hoofdletters: strtoupper($var)
$naam = "Maurice";
echo strtoupper($naam); //geeft MAURICE

// string omzetten naar kleine letters: strtolower($var)
$naam = "Maurice";
echo strtolower($naam); //geeft maurice

// spaties voor en na de invoer weghalen: trim($var)
$naam = " Maurice ";
echo trim($naam); //geeft Maurice

// string vervangen: str_replace($search, $replace, $subject)
$naam = "Maurice";
echo str_replace("Maurice", "John", $naam); //geeft John

//////////////////////////////////////////////////
/// Zelf functies maken //////////////////////////
//////////////////////////////////////////////////

function getFullName($voornaam, $achternaam)
{
    return $voornaam . " " . $achternaam;
}

//functie aanroepen
echo getFullName("Maurice", "Merlier");

//functie aanroepen met variabelen
$voornaam = "Maurice";
$achternaam = "Merlier";
echo getFullName($voornaam, $achternaam);

//gebruik van if else
$leeftijd = 45;
if ($leeftijd > 18) {
    echo "Je bent ouder dan 18";
} else {
    echo "Je bent jonger dan 18";
}

//gebruik van if else in html
?>
    <div>
        <?php if ($leeftijd > 18): ?>
            <h1>Je bent ouder dan 18</h1>
        <?php else: ?>
            <h1>Je bent jonger dan 18</h1>
        <?php endif; ?>
    </div>
<?php
//gebruik van switch
$leeftijd = 45;
switch ($leeftijd) {
    case 18:
        echo "Je bent 18";
        break;
    case 19:
        echo "Je bent 19";
        break;
    default:
        echo "Je bent geen 18 of 19";
}

////////////////////////////////////////
/// Database gebruiken //////////// ////
////////////////////////////////////////
// 1 resultaat ->fetch()
// meerdere resultaten ->fetchAll()

//database object initialiseren
$db = new Database();

//query uitvoeren (met 1 resultaat) en opslaan in een variabele $result (waarbij in de query een parameter wordt gebruikt)
$result = $db->query("SELECT * FROM posts WHERE id = ?", [
    1
])->fetch();

//query uitvoeren (met 1 resultaat) en opslaan in een variabele $result (waarbij in de query een 'named' parameter wordt gebruikt)
$result = $db->query("SELECT * FROM posts WHERE id = :id", [
    'id' => 1
])->fetch();

//query uitvoeren (met meerdere resultaten) en opslaan in een variabele $result (array)
$result = $db->query("SELECT * FROM posts")->fetchAll();

//query uitvoeren zonder resultaat (insert, update, delete)
$db->query("INSERT INTO posts (title, content) VALUES (?, ?)", [
    "Mijn titel",
    "Mijn content"
]);
//het id van de laatste insert opvragen
$id = $db->lastInsertId();

$db->query("UPDATE posts SET title = ?, content = ? WHERE id = ?", [
    "Mijn titel",
    "Mijn content",
    1
]);
$db->query("DELETE FROM posts WHERE id = ?", [
    1
]);

//query uitvoeren zonder resultaat (insert, update, delete) met 'named' parameters (let op de dubbele punt voor de parameter)
$db->query("INSERT INTO posts (title, content) VALUES (:title, :content)", [
    'title' => "Mijn titel",
    'content' => "Mijn content"
]);
$db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id", [
    'title' => "Mijn titel",
    'content' => "Mijn content",
    'id' => 1
]);
$db->query("DELETE FROM posts WHERE id = :id", [
    'id' => 1
]);

//sql queries select, insert, update, delete voorbeelden
//select
$db->query("SELECT * FROM posts")->fetchAll();
$db->query("SELECT * FROM posts WHERE id = ?", [1])->fetch();
$db->query("SELECT * FROM posts WHERE id = :id", ['id' => 1])->fetch();
//insert
$db->query("INSERT INTO posts (title, content) VALUES (?, ?)", ["Mijn titel", "Mijn content"]);
$db->query("INSERT INTO posts (title, content) VALUES (:title, :content)", ['title' => "Mijn titel", 'content' => "Mijn content"]);
//update
$db->query("UPDATE posts SET title = ?, content = ? WHERE id = ?", ["Mijn titel", "Mijn content", 1]);
$db->query("UPDATE posts SET title = :title, content = :content WHERE id = :id", ['title' => "Mijn titel", 'content' => "Mijn content", 'id' => 1]);
//delete
$db->query("DELETE FROM posts WHERE id = ?", [1]);
$db->query("DELETE FROM posts WHERE id = :id", ['id' => 1]);

//flash message tonen
flash("Post is opgeslagen", true, 3000); //true = succes, 3000 = 3 seconden

?>
    <!--
        ////////////////////////////////////////
        /////////////// Formulieren ////////////
        ////////////////////////////////////////


        Formulier maken (voorbeeld
         action: de url waar het formulier naartoe moet
         method: de methode die gebruikt moet worden (get of post)
         csrf: de csrf token (voor veiligheid bij een post formulier)
         name: de naam van het veld (wordt gebruikt om de waarde op te halen)
         value: de waarde van het veld
         placeholder: de tekst die in het veld wordt getoond
         required: het veld is verplicht
         type: het type veld (text, password, email, number, date, time, url, color, range, search, tel) -->
    <form action="/posts" method="post">
        <?= csrf() ?>
        <input type="text" name="title" placeholder="Titel" required>
        <textarea name="content" placeholder="Content"></textarea>
        <input type="submit" value="Opslaan">
    </form>

    <!-- input fields -->
    <!-- text -->
    <input type="text" name="title" placeholder="Titel">
    <!-- password -->
    <input type="password" name="password" placeholder="Wachtwoord">
    <!-- email -->
    <input type="email" name="email" placeholder="E-mailadres">
    <!-- number -->
    <input type="number" name="age" placeholder="Leeftijd">
    <!-- date -->
    <input type="date" name="date" placeholder="Datum">
    <!-- time -->
    <input type="time" name="time" placeholder="Tijd">
    <!-- url -->
    <input type="url" name="url" placeholder="URL">
    <!-- color -->
    <input type="color" name="color" placeholder="Kleur">
    <!-- range -->
    <input type="range" name="range" placeholder="Range">

    <!-- textarea -->
    <textarea name="content" placeholder="Content..."></textarea>

    <!-- selectbox -->
    <select name="contry">
        <option value=""></option>
        <option value="NL">Nederland</option>
        <option value="BE">België</option>
        <option value="DE">Duitsland</option>
        <option value="FR">Frankrijk</option>
        <option value="UK">Engeland</option>
    </select>

    <!-- met een voorgeselecteerde option -->
    <select name="contry">
        <option value=""></option>
        <option value="NL" selected>Nederland</option>
        <option value="BE">België</option>
    </select>

    <!-- checkbox -->
    <input type="checkbox" name="terms" value="1">

    <!-- radiobuttons -->
    <input type="radio" name="sex" value="M">Man<br>
    <input type="radio" name="sex" value="V">Vrouw<br>
    <input type="radio" name="sex" value="X">Anders<br>

    <!-- hidden field -->
    <input type="hidden" name="id" value="1">

    <!-- submit button -->
    <input type="submit" value="Opslaan" name="save" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">

    <!-- of button -->
    <button type="submit" name="save" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
        Opslaan
    </button>

    <!-- validatie bij een form field -->
<?php if (errors('veldnaam')): ?>
    <p class="text-red-500 text-sm my-2"><?= errors('veldnaam') ?></p>
<?php endif; ?>
<?php
////////////////////////////////////////
/////////////// Sessions ///////////////
////////////////////////////////////////

//starten van een sessie
session_start();

//variabele in de sessie zetten
$_SESSION['naam'] = "Maurice";

//variabele uit de sessie halen
echo $_SESSION['naam'];

//sessie variabele verwijderen
unset($_SESSION['naam']);

//sessie verwijderen
session_destroy();

////////////////////////////////////////
/// Cookies ////////////////////////////
////////////////////////////////////////
///
//cookie zetten
setcookie("naam", "Maurice", time() + 3600);

//cookie uitlezen
echo $_COOKIE['naam'];

//cookie verwijderen
setcookie("naam", "", time() - 3600);

////////////////////////////////////////
/// Bestanden //////////////////////////
////////////////////////////////////////
///
//bestand inlezen
$bestand = file_get_contents("bestand.txt");

//bestand schrijven
file_put_contents("bestand.txt", "Hallo");

//bestand verwijderen
unlink("bestand.txt");

//bestand verplaatsen
rename("bestand.txt", "nieuwbestand.txt");

//bestand kopiëren
copy("bestand.txt", "nieuwbestand.txt");

//bestand uploaden
move_uploaded_file($_FILES['bestand']['tmp_name'], "bestand.txt");


///////////////////////////////////////
/// Views /////////////////////////////
///////////////////////////////////////

//view laden
view('posts', [
    'posts' => $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll(),
]);

//view laden met onveilige variabelen (niet aanbevolen)
view('home', [], [
    'onveilig_script' => '<script>alert("hacked")</script>',
]);

////////////////////////////////////////
/// Classes ////////////////////////////
////////////////////////////////////////

//class aanmaken
class Persoon
{
    //variabelen
    public $voornaam;
    public $achternaam;
    public $leeftijd;

    //constructor
    public function __construct($voornaam, $achternaam, $leeftijd)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        $this->leeftijd = $leeftijd;
    }

    //functie
    public function getFullName()
    {
        return $this->voornaam . " " . $this->achternaam;
    }
}

//class gebruiken (object aanmaken)
$persoon = new Persoon("Maurice", "Merlier", 45);

//functie/methode aanroepen
echo $persoon->getFullName();

////////////////////////////////////////
/// Veiligheid /////////////////////////
////////////////////////////////////////

/// gebruik van htmlspecialchars
?>
    <h1><?= $naam ?></h1> (onveilig)
    <h1><?= htmlspecialchars($naam) ?></h1> (veilig)

<?php
///////////////////////////////////////////
/// Validators /////////////////////////////
/// ////////////////////////////////////////
/// Validatie vindt plaats in de controller
$request->validate([
    'naam' => 'required|length:3,50',
    'email' => 'required|email',
    'leeftijd' => 'required|integer|between:18,100',
]);
//beschikbare validators
// required, integer, length, email, url, date, min, max, between, in, notIn, numeric, date_format, date_before, date_after, date_between, regex, image
$request->validate(['naam' => 'required']);
$request->validate(['leeftijd' => 'integer']);
$request->validate(['naam' => 'length:3,50']);
$request->validate(['email' => 'email']);
$request->validate(['website' => 'url']);
$request->validate(['geboortedatum' => 'date']);
$request->validate(['leeftijd' => 'min:18']);
$request->validate(['leeftijd' => 'max:100']);
$request->validate(['leeftijd' => 'between:18,100']);
$request->validate(['rol' => 'in:admin,editor,user']);
$request->validate(['rol' => 'notIn:guest,banned']);
$request->validate(['prijs' => 'numeric']);
$request->validate(['geboortedatum' => 'date_format:Y-m-d']);
$request->validate(['geboortedatum' => 'date_before:2024-01-01']);
$request->validate(['geboortedatum' => 'date_after:1900-01-01']);
$request->validate(['geboortedatum' => 'date_between:1900-01-01,2024-01-01']);
$request->validate(['username' => 'regex:/^[a-zA-Z0-9_]{3,20}$/']);
$request->validate(['foto' => 'image']);

//met handmatige foutmelding
$request->validate([
    'naam' => 'required|length:3,50',
], [
    'naam.required' => 'Het naam veld is verplicht',
    'naam.length' => 'Het naam veld moet tussen de 3 en 50 karakters zijn',
]);

//handmatig een error toevoegen
$request->setError('naam',"Naam is verplicht");

/*  SQL-query voorbeelden
- Voorbeeld van een query met AND en OR
SELECT *
FROM leerlingen
WHERE plaats = 'utrecht'
AND (achternaam LIKE '%p%'
OR voornaam LIKE '%p%');

- Voorbeeld van een query met meerdere tabellen
SELECT *
FROM auteurs, boeken
WHERE auteurs.auteurnr = boeken.auteurnr
AND boeken.titel = 'Au pair!';
*/
////////////////////////////////////////
/// Gebruik van Model //////////////////
////////////////////////////////////////
///
// Model toevoegen aan index.php
require __DIR__ . "/../src/Model.php";
require __DIR__ . "/../app/models/User.php";

//query op users tabel
$users = (new User)
    ->where('voornaam', 'LIKE', '%p%') //voornaam LIKE '%p%'
    ->where('role', 'user') // role = 'user'
    ->whereNull('tussenvoegsel') // tussenvoegsel IS NULL
    ->get(); //uitvoeren van de query

//beperkt aantal resultaten ophalen
$users = (new User)
    ->limit(3)
    ->get();

//Alle users ophalen
$users = (new User)->all();

//user met id 2 ophalen
$user = (new User)->find(2);

//voornaam van de gebruiker op het scherm schrijven
echo $user->voornaam;

//user aanmaken
$user = (new User())->create([
    'name' => 'Piet Puck',
    'email' => 'testttw@mail.nl',
    'password' => password_hash('password', PASSWORD_BCRYPT),
    'role' => 'user'
]);

//gegevens van user 2 aanpassen
$user = (new User)->find(2);
//naam wijzigen
$user->name = 'John Doe';
//opslaan in database (alleen als er werkelijk iets gewijzigd is)
$user->save();

//user verwijderen
$user = (new User)->find(6);
//de zojuist opgehaalde user verwijderen uit de database
$user->delete();

//uitgevoerde queries bekijken
$user->dumpQueryLog();