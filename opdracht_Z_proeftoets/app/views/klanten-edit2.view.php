<?php
view("parts/header", ['title' => 'Klant wijzigen']);
view("parts/navigatie-menu");
?>
<div class="sm:mx-10">
    <h1 class="text-3xl my-4">Klant wijzigen</h1>

    <form action="/klanten-update/<?= $klant['id'] ?>" method="post">
        <?= csrf();
        view('forms.input', [
            'label' => 'Voornaam',
            'name' => 'voornaam',
            'type' => 'text',
            'value' => old('voornaam', $klant['voornaam']),
            'validation' => true,
        ]);
        view('forms.input', [
            'label' => 'Tussenvoegsel',
            'name' => 'tussenvoegsel',
            'type' => 'text',
            'value' => old('tussenvoegsel', $klant['tussenvoegsel']),
        ]);
        view('forms.input', [
            'label' => 'Achternaam',
            'name' => 'achternaam',
            'type' => 'text',
            'value' => old('achternaam', $klant['achternaam']),
            'validation' => true,
        ]);
        view('forms.input', [
            'label' => 'Telefoonnr',
            'name' => 'telefoonnr',
            'type' => 'text',
            'value' => old('telefoonnr', $klant['telefoonnr']),
        ]);
        view('forms.button', [
            'text' => 'Opslaan',
            'type' => 'submit',
        ]);
        ?>

    </form>


</div>
<?php
view("parts/footer");