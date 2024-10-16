<?php

if(isset($_GET['naam'])) {
    $naam = $_GET['naam'];
    $leeftijd = $_GET['leeftijd'];
    $sport = $_GET['sport'];
    echo $naam . " is " . $leeftijd . " jaar en doet aan " . $sport;
}