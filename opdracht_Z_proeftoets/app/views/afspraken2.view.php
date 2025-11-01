<?php
view("parts/header", ['title' => 'Afspraken']);
view("parts/navigatie-menu");
?>
<div class="sm:mx-10">
    <h1 class="text-3xl my-4">Afspraken</h1>

    <div class="border border-1 rounded p-4 bg-gray-50 my-4">
        <form action="/afspraken" method="get">
            <div class="flex gap-4">
            <?php
            view('forms.input', [
                'name' => 'datum',
                'type' => 'date',
                'required' => true,
            ]);
            view('forms.button', [
                'text' => 'Zoek',
                'type' => 'submit',
            ]);
            ?>
            </div>
        </form>

        <ul>
            <?php foreach ($afspraken as $afspraak): ?>
                <li class="flex gap-4">
                    <?= $afspraak['voornaam'] . " " . $afspraak['tussenvoegsel'] . " " . $afspraak['achternaam'] . " " . $afspraak["van"] . " " . $afspraak['tot'] ?>

                    <?php
                    view('parts/delete-button', [
                        'action' => "/afspraak-destroy/" . $afspraak['id']
                    ]);
                    ?>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php
view("parts/footer");