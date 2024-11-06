<?php

if (isset($_GET['naam'])) {
    //veilig
    $naam = htmlspecialchars($_GET['naam']);
    $leeftijd = htmlspecialchars($_GET['leeftijd']);
    $sport = htmlspecialchars($_GET['sport']);

    //onveilig
    $naam = $_GET['naam'];
    $leeftijd = $_GET['leeftijd'];
    $sport = $_GET['sport'];

    echo $naam . " is " . $leeftijd . " jaar en doet aan " . $sport;
}