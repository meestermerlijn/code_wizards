<?php
view("parts/header", ['title' => 'about']);
view("parts/navigatie-menu");

?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">About Code Wizards</h1>

        <p class="my-4">Code wizards is een framework dat is ontwikkeld voor studenten van het Jan van Egmond College. Het framework is ontwikkeld om het maken van websites en webapplicaties makkelijker te maken. Het framework is gebaseerd op het Laravel framework en is bedoeld voor beginnende PHP-programmeurs. Het framework is open source en gratis te gebruiken.</p>
        </p>
        <p>De bron van het framework is te vinden op <a href="https://github.com/meestermerlijn/code_wizards">Github</a></p>
        <p>Uitleg over de werking van het framework is te vinden op de <a href="https://maken.wikiwijs.nl/209164/V6_p1_2_PHP_MySQL_webapplicatie_vanaf_null_v2">wiki pagina</a></p>
    </div>


<?php
view("parts/footer");
