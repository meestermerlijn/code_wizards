<?php
view("parts/header", ['title' => 'item wijzigen']);
view("parts/navigatie-menu");
?>
    <h1 class="text-3xl my-4">Item <?= $item['naam'] ?> wijzigen</h1>

    <form action="/items-update/<?= $item['id'] ?>" method="post">
        <?= csrf();
        //naam veld
        view('forms.input',[
            'label'=> 'Naam',
            'name'=> 'naam',
            'type'=> 'text',
            'value' => old('naam', $item['naam']),
            'validation' => true,
        ]);
        //beschrijving veld
        view('forms.textarea',[
            'label'=> 'Beschrijving',
            'name'=> 'beschrijving',
            'value' => old('beschrijving', $item['beschrijving']),
            'validation' => true,
        ]);
        //Prijs veld
        view('forms.input',[
            'label'=> 'Prijs',
            'name'=> 'prijs',
            'type'=> 'number',
            'step'=> '0.01',
            'value' => old('prijs', $item['prijs']),
            'validation' => true,
        ]);
        //button
        view('forms.button',[
            'text'=> 'Wijzigen',
            'type'=> 'submit',
        ]);
        ?>
    </form>
<?php
view("parts/footer");