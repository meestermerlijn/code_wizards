<?php
return [
    'app' => [
        'env' => 'development',
        'name' => 'Agenda',               //Naam van de applicatie aangepast (1p samen met email)
        'email' => 'info@agenda-mail.nl', //Email van de applicatie aangepast
    ],
    'database' => [
        'user' => 'root',
        'password' => 'secret',              //Wachtwoord aangepast (1p)
        'port' => 3306,
        'host' => 'localhost',
        'name' => 'agenda',              //Database naam aangepast (1p)
        'charset' => 'utf8mb4',
    ],
];