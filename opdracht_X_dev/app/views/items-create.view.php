<?php
view("parts/header", ['title' => 'item toevoegen']);
view("parts/navigatie-menu");
?>
    <h1 class="text-3xl my-4">Item toevoegen</h1>


    <form action="/items-store" method="post">
        <?= csrf();
        //naam veld
        view('forms.input', [
            'label'=> 'Naam',
            'name'=> 'naam',
            'type'=> 'text',
            'value' => old('naam'),
            'validation' => true,
        ]);
        //beschrijving veld
        view('forms.textarea', [
            'label'=> 'Beschrijving',
            'name'=> 'beschrijving',
            'value' => old('beschrijving'),
            'validation' => true,
        ]);
        //Prijs veld
        view('forms.input', [
            'label'=> 'Prijs',
            'name'=> 'prijs',
            'type'=> 'number',
            'step'=> '0.01',
            'value' => old('prijs'),
            'validation' => true,
        ]);
        //button
        view('forms.button', [
            'text'=> 'Toevoegen',
            'type'=> 'submit',
        ]);
        ?>
    </form>
<?php
view("parts/footer");