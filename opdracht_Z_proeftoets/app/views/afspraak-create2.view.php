<?php
view("parts/header", ['title' => 'Afspraak maken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Afspraak maken</h1>

        <div class="border border-1 rounded p-4 bg-gray-50 my-4">

            <!-- Form post (1p) csrf (1p) gebruik old(..) (2p) tonen van fouten (3p) -->
            <form action="/afspraak-store" method="post">
                <?= csrf();

                view('forms.select', [
                    'label' => 'Klant',
                    'name' => 'klant_id',
                    'options' => $klanten,
                    'value' => old('klant_id'),
                    'validation' => true,
                ]);
                view('forms.input', [
                    'label' => 'Datum',
                    'name' => 'datum',
                    'type' => 'date',
                    'value' => old('datum'),
                    'validation' => true,
                ]);
                view('forms.input', [
                    'label' => 'Tijd van',
                    'name' => 'van',
                    'type' => 'time',
                    'value' => old('van'),
                    'validation' => true,
                ]);
                view('forms.input', [
                    'label' => 'Tijd tot',
                    'name' => 'tot',
                    'type' => 'time',
                    'value' => old('tot'),
                    'validation' => true,
                ]);
                view('forms.textarea', [
                    'label' => 'Opmerkingen',
                    'name' => 'opmerking',
                    'value' => old('opmerking'),
                    'validation' => true,
                ]);
                view('forms.button', [
                    'text' => 'Opslaan',
                    'type' => 'submit',
                ]);
                ?>
            </form>
        </div>
    </div>
<?php
view("parts/footer");