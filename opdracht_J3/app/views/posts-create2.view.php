<?php
view("parts/header", ['title' => 'Nieuwe post aanmaken']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Nieuwe post maken</h1>

        <!-- Opgave J3.2 - Formulier voor het aanmaken van een nieuwe post -->
        <form action="/posts-store" method="post">
            <?= csrf();
            //Titel veld
            view('forms.input',[
                'label' => 'Titel',
                'placeholder' => 'Titel',
                'type' => 'text',
                'required' => true,
            ]);
            //Content veld
            view('forms.textarea',[
               'label' => 'Content',
               'placeholder'=>'Content...',
            ]);
            //verstuur button
            view('forms.button', [
                'text' => 'Opslaan',
                'type' => 'submit',
            ]);
            ?>
        </form>

    </div>


<?php
view("parts/footer");