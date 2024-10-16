<?php

if (isset($_GET['naam'])) {
    $naam = $_GET['naam'];
    echo "Hallo, " . htmlspecialchars($naam) . "!";
}
